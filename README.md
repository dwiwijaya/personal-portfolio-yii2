# Personal Portfolio Yii2

This is a personal portfolio website project built using the [Yii2](https://www.yiiframework.com/) framework. The website is designed to showcase a personal profile, skills, experience, and projects.

## Features

- **Homepage**: Displays a brief introduction, name, and profession.
- **About Me**: Information about experience, completed projects, and 24/7 support availability.
- **Skills**: A list of frontend and backend skills with representative icons.
- **Projects**: A showcase of completed projects (can be updated as needed).
- **Contact**: A contact form, including integration with WhatsApp, email, and other social media platforms.

## Technologies Used

- **Frontend**:
  - HTML5, CSS3
  - Bootstrap
  - JQuery
- **Backend**:
  - Yii2 Framework
  - PHP
- **Database**:
  - MySQL
  - PostgreSQL (optional)
- **Deployment**:
  - Apache/Nginx Server
  - Composer for dependency management

## Screenshot

Here’s a preview of the website:

![Portfolio Website Screenshot](https://github.com/dwiwijaya/personal-portfolio-yii2/assets/screenshot.png)

## Installation

Follow these steps to set up the project locally:

1. Clone this repository:
   ```bash
   git clone https://github.com/dwiwijaya/personal-portfolio-yii2.git
   ```
2. Navigate to the project directory:
   ```bash
   cd personal-portfolio-yii2
   ```
3. Install dependencies using Composer:
   ```bash
   composer install
   ```
4. Create a new database and import the `database.sql` file (if available in the repo).
5. Configure the database in `config/db.php`:
   ```php
   return [
       'class' => 'yii\db\Connection',
       'dsn' => 'mysql:host=localhost;dbname=your_database_name',
       'username' => 'root',
       'password' => '',
       'charset' => 'utf8',
   ];
   ```
6. Run the application:
   ```bash
   php yii serve
   ```
7. Open the application in your browser:
   ```
   http://localhost:8080
   ```

## License

This project is open source and available under the [MIT License](LICENSE).
