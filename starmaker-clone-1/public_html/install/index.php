<?php
// index.php - Entry point for the installation process

// Start session
session_start();

// Include the installer script
require_once '../../src/scripts/installer.php';

// Check server requirements
$requirements = checkServerRequirements();
if (!$requirements['php'] || !$requirements['mysql']) {
    die("Server requirements not met. Please ensure PHP version is >= 8.1 and MySQL version is >= 5.7.");
}

// Handle installation steps
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission
    $dbConfig = [
        'host' => $_POST['db_host'],
        'username' => $_POST['db_username'],
        'password' => $_POST['db_password'],
        'database' => $_POST['db_name']
    ];

    // Create database and configure application
    $installer = new Installer($dbConfig);
    if ($installer->run()) {
        echo "Installation successful! Please delete the install directory.";
    } else {
        echo "Installation failed: " . $installer->getError();
    }
} else {
    // Display installation form
    include 'install_form.php';
}

// Function to check server requirements
function checkServerRequirements() {
    return [
        'php' => version_compare(PHP_VERSION, '8.1', '>='),
        'mysql' => version_compare(mysqli_get_server_info(mysqli_connect('localhost', 'root', '')), '5.7', '>=')
    ];
}
?>