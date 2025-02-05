# Installer Documentation

## Overview
This README provides instructions for setting up the installer for the StarMaker Clone application. The installer is responsible for configuring the application environment, including database setup and initial configuration.

## Installation Steps

1. **Upload the Installer**
   - Upload the contents of the `installer` directory to your server's `public_html` directory.

2. **Access the Installer**
   - Navigate to `yourdomain.com/install.php` in your web browser to start the installation process.

3. **System Requirements Check**
   - The installer will automatically check for the following server requirements:
     - PHP version 8.1 or higher
     - MySQL version 5.7 or higher
     - FFmpeg installed and accessible

4. **Database Configuration**
   - You will be prompted to enter your database credentials. The installer will create a new MySQL database and user if necessary.

5. **Admin Account Creation**
   - Set up an admin account by providing a username and password.

6. **Configuration File Generation**
   - The installer will generate the necessary configuration files based on the provided settings.

7. **Post-Installation Security**
   - The installer will perform basic security hardening measures to secure your installation.

## Troubleshooting
- If you encounter any issues during installation, ensure that your server meets the required specifications and that all necessary extensions are enabled in your PHP configuration.

## Support
For further assistance, please refer to the main project documentation or contact the support team.

## License
This installer is part of the StarMaker Clone project and is licensed under the terms specified in the LICENSE file.