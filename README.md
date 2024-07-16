# Online-Music-Streaming-Service
Welcome to the Online Music Streaming Service! This project is a web-based application for streaming music, built with HTML, CSS, JavaScript, and PHP. The service includes features such as user login, audio streaming, feedback submission, and admin-specific audio management and upload functionalities. Its basically an online audio/music streaming service which is build using HTML, CSS, JS and PHP as the backend. It is an frontend project which has user login module, audio streaming module, a feedback page and an separate admin audio management page.  

Table of Contents
   - Features
   - Technologies Used
   - Installation
   - Usage
   - Project Structure
   - Contributing
   - License
   - Contact

Features

  - User Login Module: Secure login and registration for users.
  - Audio Streaming Module: Stream music from a curated library.
  - Feedback Page: Users can provide feedback and rate the service.
  - Admin Audio Management: Admins can manage existing audio content.
  - Upload Audio Page: Admins can upload new audio files.

Technologies Used

  - Frontend: HTML, CSS, JavaScript
  - Backend: PHP


Installation

1. Clone the Repository:

       git clone https://github.com/yourusername/online-music-streaming-service.git

3. Navigate to the Project Directory:

       cd online-music-streaming-service

3. Set Up Your Local Server:

    - Ensure you have a local server environment (e.g., XAMPP, WAMP, MAMP).
    - Place the project directory in the htdocs (or equivalent) folder of your server setup.

4. Create a Database:
   
    - Open phpMyAdmin (or any MySQL database interface).
    - Create a new database (e.g., music_streaming).
    - Import the provided SQL file (database.sql) to set up the necessary tables.

5. Configure Database Connection:
    - Open config.php in the project root.
    - Set your database credentials:

          <?php
          $servername = "localhost";
          $username = "your_db_username";
          $password = "your_db_password";
          $dbname = "music_streaming";
          ?>

6. Run the Application:
    - Open your web browser and navigate to

          http://localhost/online-music-streaming-service.

Usage

User Login:

   - Register for a new account or log in with existing credentials.

Stream Music:

   - Browse the library and click on a track to start streaming.

Provide Feedback:

  - Navigate to the feedback page and submit your thoughts.

Admin Management:

  - Log in as an admin to access audio management and upload pages.

    

Project Structure

    online-music-streaming-service/
    │
    ├── assets/
    │   ├── css/
    │   ├── images/
    │   └── js/
    │
    ├── includes/
    │   ├── header.php
    │   └── footer.php
    │
    ├── admin/
    │   ├── manage_audio.php
    │   └── upload_audio.php
    │
    ├── user/
    │   ├── login.php
    │   └── register.php
    │
    ├── audio/
    │   ├── stream.php
    │   └── player.js
    │
    ├── feedback/
    │   └── feedback.php
    │
    ├── config.php
    ├── index.php
    └── database.sql


Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (git checkout -b feature/your-feature-name).
3. Commit your changes (git commit -m 'Add some feature').
4. Push to the branch (git push origin feature/your-feature-name).
5. Open a pull request.


License

This project is under the process of licensing under the SRM University. See the LICENSE file for more information.

Contact

For any inquiries or issues, please contact [kx4904@gmail.com].



Thank you for using our Online Music Streaming Service! Enjoy the music!


























