<?php
// installer/src/install.php

// Check server requirements
function checkRequirements() {
    if (version_compare(PHP_VERSION, '8.1', '<')) {
        die('PHP version must be 8.1 or higher.');
    }
    if (!extension_loaded('mysqli')) {
        die('MySQLi extension is required.');
    }
    if (!file_exists('/usr/bin/ffmpeg')) {
        die('FFmpeg is required for audio processing.');
    }
}

// Create MySQL database
function createDatabase($dbHost, $dbUser, $dbPass, $dbName) {
    $connection = new mysqli($dbHost, $dbUser, $dbPass);
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    if ($connection->query($sql) === TRUE) {
        echo "Database created successfully.";
    } else {
        die('Error creating database: ' . $connection->error);
    }

    $connection->close();
}

// Generate configuration file
function generateConfig($dbHost, $dbUser, $dbPass, $dbName) {
    $configContent = "<?php\n";
    $configContent .= "\$dbHost = '$dbHost';\n";
    $configContent .= "\$dbUser = '$dbUser';\n";
    $configContent .= "\$dbPass = '$dbPass';\n";
    $configContent .= "\$dbName = '$dbName';\n";
    file_put_contents('config.php', $configContent);
}

// Main installation process
function install() {
    checkRequirements();

    // Database configuration
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'starmaker_clone';

    createDatabase($dbHost, $dbUser, $dbPass, $dbName);
    generateConfig($dbHost, $dbUser, $dbPass, $dbName);

    echo "Installation completed successfully.";
}

// Run installation
install();
?>