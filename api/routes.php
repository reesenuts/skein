<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, X-Requested-With");

require_once("./config/database.php");
require_once("./modules/get.php");
require_once("./modules/post.php");
require_once("./modules/auth.php");
require_once("./modules/update.php");
require_once("./modules/delete.php");

// Debug line - remove in production
error_log('ENV VARS: ' . print_r($_ENV, true));

try {
    if (!isset($_ENV['ENCRYPTION_KEY'])) {
        throw new Exception('ENCRYPTION_KEY not found in environment variables');
    }

    $db = new Connection();
    $pdo = $db->connect();
    $auth = new Auth($pdo);
    $get = new Get($pdo);
    $post = new Post($pdo);

    // Handle preflight requests
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit();
    }

    $request = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    // Session verification endpoint
    if (strpos($request, '/session-verify') !== false) {
        $key = $_ENV['ENCRYPTION_KEY'];
        $iv = bin2hex(random_bytes(16));
        $token = bin2hex(random_bytes(32));
        
        $_SESSION['encryption_key'] = $key;
        
        echo json_encode([
            'success' => true,
            'key' => base64_encode($key),
            'iv' => base64_encode($iv),
            'token' => base64_encode($token)
        ]);
        exit;
    }

    // Handle encrypted requests
    if ($method !== 'GET' && $method !== 'OPTIONS') {
        $requestData = decryptRequest();
    }

    // Route handling
    switch(true) {
        case $method === 'GET' && strpos($request, '/products') !== false:
            $category = isset($_GET['category']) ? $_GET['category'] : null;
            $response = $get->getProducts($category);
            echo encryptResponse($response);
            break;

        case $method === 'POST' && strpos($request, '/products/add') !== false:
            $response = $post->addProduct($requestData);
            echo encryptResponse($response);
            break;

        case $method === 'POST' && strpos($request, '/login') !== false:
            $response = $auth->login($requestData['email'], $requestData['password']);
            echo encryptResponse($response);
            break;

        default:
            http_response_code(404);
            echo json_encode(["error" => "Not found"]);
            break;
    }

} catch(Exception $e) {
    http_response_code(500);
    echo json_encode([
        "error" => $e->getMessage(),
        "code" => 500
    ]);
}

function encryptResponse($data) {
  global $auth;
  return $auth->encryptData($data);
}

function decryptRequest() {
  global $auth;
  $rawData = file_get_contents("php://input");
  $decodedData = json_decode(base64_decode($rawData), true);

  if (!isset($decodedData['data']) || !isset($decodedData['iv'])) {
      return null;
  }

  $encryptedData = base64_decode($decodedData['data']);
  $iv = base64_decode($decodedData['iv']);

  $decrypted = openssl_decrypt(
      $encryptedData,
      'AES-256-CBC',
      $_ENV['ENCRYPTION_KEY'],
      OPENSSL_RAW_DATA,
      $iv
  );

  return json_decode($decrypted, true);
}