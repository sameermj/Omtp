<?php
// installer.php

// Check server requirements
function checkServerRequirements() {
    if (version_compare(PHP_VERSION, '8.1', '<')) {
        die('PHP version must be 8.1 or higher.');
    }

    // Check MySQL version
    $mysqli = new mysqli("localhost", "username", "password");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $result = $mysqli->query("SELECT VERSION() AS version");
    $row = $result->fetch_assoc();
    if (version_compare($row['version'], '5.7', '<')) {
        die('MySQL version must be 5.7 or higher.');
    }
    $mysqli->close();
}

// Create MySQL database
function createDatabase($dbName) {
    $mysqli = new mysqli("localhost", "username", "password");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    if ($mysqli->query($sql) === TRUE) {
        echo "Database created successfully.";
    } else {
        echo "Error creating database: " . $mysqli->error;
    }
    $mysqli->close();
}

// Setup configuration files
function setupConfigFiles($dbName) {
    $configContent = "<?php\n";
    $configContent .= "\$dbHost = 'localhost';\n";
    $configContent .= "\$dbUser = 'username';\n";
    $configContent .= "\$dbPass = 'password';\n";
    $configContent .= "\$dbName = '$dbName';\n";
    
    file_put_contents('../config/database.php', $configContent);
}

// Main installation process
function runInstaller() {
    checkServerRequirements();
    
    $dbName = 'starmaker_clone_db'; // Change as needed
    createDatabase($dbName);
    setupConfigFiles($dbName);
    
    echo "Installation completed successfully.";
}

// Execute the installer
runInstaller();
?>