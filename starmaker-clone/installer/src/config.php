<?php
// Configuration settings for the installation process

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_username');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'your_db_name');

// Application settings
define('APP_URL', 'http://yourdomain.com');
define('APP_ENV', 'production'); // or 'development'

// Security settings
define('SECRET_KEY', 'your_secret_key');

// File paths
define('UPLOAD_DIR', __DIR__ . '/../uploads/');
define('LOG_DIR', __DIR__ . '/../logs/');

// Other configurations
define('FFMPEG_PATH', '/usr/bin/ffmpeg'); // Adjust based on server configuration
define('SSL_ENABLED', false); // Set to true if SSL is enabled
?>