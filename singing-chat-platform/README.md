# Singing Chat Platform

Welcome to the Singing Chat Platform! This project is designed to provide a seamless experience for users to upload songs, engage in real-time chat, and manage their profiles, all while offering an admin panel for overseeing platform activities.

## Project Structure

The project is organized into several key components:

- **admin-panel**: Contains the admin interface for managing users, songs, and platform settings.
- **user-frontend**: The user-facing part of the application where users can register, log in, and interact with the platform.
- **api**: The backend API that handles user authentication, song management, and chat functionalities.
- **chat-system**: Manages real-time chat features using WebSockets.
- **song-management**: Handles song uploads and metadata management.
- **security**: Implements security features such as authentication and data protection.

## Features

### Admin Panel
- User management: Block, delete, view, and filter users.
- Dashboard: Visualize user and song statistics with charts and graphs.
- Platform settings: Configure limits and upload settings.

### User Frontend
- Registration and login: Secure user authentication.
- User profile: View user details and uploaded songs.
- Real-time chat: Engage with other users live.

### API
- User management: Registration, login, and profile management.
- Song management: Upload, delete, and retrieve song details.

### Chat System
- Real-time chat server: Allows users to communicate live.

### Song Management
- Upload songs: Users can upload audio or video files.
- Admin management: Admins can manage song files and metadata.

### Security
- Secure authentication: Uses hashed passwords and sessions.
- Protection against CSRF attacks and SQL injection.

## Getting Started

To get started with the Singing Chat Platform, follow these steps:

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/singing-chat-platform.git
   ```

2. Navigate to each component directory (admin-panel, user-frontend, api, chat-system, song-management, security) and install dependencies:
   ```
   cd admin-panel
   npm install
   ```

3. Start the development server for each component:
   ```
   npm start
   ```

4. Ensure the API and chat system are running to enable full functionality.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the LICENSE file for details.