-- Add test admin account
INSERT INTO users (
    userID, 
    username, 
    email,
    full_name,
    password
) VALUES (
    'ADMIN_001',
    'admin',
    'admin@example.com',
    'Admin User',
    '$2y$10$ThisIsA22CharacterSaltui0BoDFUzWwZmGRSvxK2VhKpbAKgn0u'  -- Password: admin123
); 