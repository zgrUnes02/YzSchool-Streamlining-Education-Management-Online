<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

# School Management System with Zoom Integration

This Laravel project is a comprehensive School Management System that includes seamless integration with Zoom for online classes and meetings. The system is designed to simplify various school administrative tasks and enhance the virtual learning experience.

## Features

- **User Roles:**
  - Admin, Teachers, Students, and Parents with role-based access.

- **Classrooms:**
  - Create, manage, and schedule online classrooms.

- **Zoom Integration:**
  - Seamless integration with Zoom for virtual classes and meetings.
  - Automated Zoom links for scheduled classes.

- **Attendance Tracking:**
  - Track and manage student attendance for both in-person and online classes.

- **Grades and Reports:**
  - Record and analyze student grades.
  - Generate and share progress reports with parents.

- **Announcements and Messaging:**
  - Send announcements to students and parents.
  - In-app messaging for communication within the system.

- **Events and Calendar:**
  - Schedule and manage school events.
  - Calendar integration for tracking important dates.

## Getting Started

1. Clone the repository:

   ```bash
   git clone https://github.com/zgrUnes02/YzSchool-Streamlining-Education-Management-Online
   cd YzSchool-Streamlining-Education-Management-Online

2. Set up your environment variables:
    
   ```bash
   cp .env.example .env

3. Install dependencies:

   ```bash
   composer install
   npm install

4. Run migrations and seed the database:

   ```bash
   php artisan migrate --seed

6. Set up a virtual host or use Laravel's built-in server:
   
   ```bash
   php artisan serve

7. Access the application at http://localhost:8000 in your browser.

## Tech Stack

- **Frontend:**
  - HTML
  - CSS (styled with Bootstrap for responsive design)
  - JavaScript (Vue.js for interactive components)

- **Backend:**
  - PHP (Laravel framework)

- **Database:**
  - MySQL

- **Zoom Integration:**
  - Zoom API
 
## MIT License

Copyright (c) [2022] [Youness zagouri]
