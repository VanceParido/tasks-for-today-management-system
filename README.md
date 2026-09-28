# Tasks for Today Management System

A CodeIgniter 4 web application for viewing daily tasks, all tasks, a demo user profile, and developer information.

## Developer

Vance Uriele Parido

## Features

- Welcome page showing only tasks scheduled for today
- Task List page showing all tasks ordered by date
- Profile page showing one demo user
- About page identifying the developer
- MySQL database connection using CodeIgniter models

## Pages

- `/` - Welcome page and today's tasks
- `/tasks` - Complete task list
- `/profile` - Demo user profile
- `/about` - Developer information

## Database Setup

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin at `http://localhost/phpmyadmin`.
3. Create a database named `tasks_for_today_db`.
4. Import `tasks_for_today_db.sql`.
5. Configure the `.env` file:

```ini
database.default.hostname = localhost
database.default.database = tasks_for_today_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306