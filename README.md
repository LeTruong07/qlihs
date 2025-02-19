# Laravel Student Management System

## Overview

This Laravel project is designed to manage students efficiently. It provides functionalities for student enrollment, record management, and performance tracking.

## Features

- Student registration and management
- User authentication
- CRUD operations for student records
- API support for integration
- Role-based access control

## Requirements

- PHP >= 8.0
- Composer
- Laravel >= 10
- MySQL/PostgreSQL

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/LeTruong07/qlihs.git
   cd your-laravel-student-management
   ```
2. Install dependencies:
   ```sh
   composer install
   ```
3. Copy the environment file and set up configurations:
   ```sh
   cp .env.example .env
   ```
4. Generate the application key:
   ```sh
   php artisan key:generate
   ```
5. Configure your database in `.env` file:
   ```sh
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
6. Run migrations:
   ```sh
   php artisan migrate
   ```
7. Start the development server:
   ```sh
   php artisan serve
   ```

## Usage

- Open `http://127.0.0.1:8000` in your browser.
- Log in with appropriate credentials.
- Add, update, or delete student records.
- View student performance reports.

## Testing

Run the test suite:

```sh
php artisan test
```



