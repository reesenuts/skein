ALTER TABLE addproduct 
ADD COLUMN productDescription TEXT AFTER productName,
ADD COLUMN productStatus ENUM('active', 'inactive') DEFAULT 'active' AFTER productCategory;

ALTER TABLE users
ADD COLUMN email VARCHAR(255) NOT NULL AFTER username,
ADD COLUMN full_name VARCHAR(255) AFTER email,
ADD UNIQUE KEY unique_email (email); 