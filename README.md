# Laravel 11 + Breeze (Blade) Installation Guide
This guide outlines the steps to install Laravel 11 and set up Laravel Breeze using the Blade templating engine.

## Installing Laravel
1. composer create-project laravel/laravel:^11.0 your-project-name
2. From .env change DB_CONNECTION=mysql
3. In config/database.php 'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
4. then run "php artisan migrate"
5. "php artisan serve" to run the project

## Installing Breeze
1. composer require laravel/breeze --dev
2. php artisan breeze:install (select blade as a option)

Then Stop the Terminal and run php artisan serve to use application

## To add the API support in laravel 11
1. create a api.php file inside routes folder
2. register the file in bootstrap\app.php "api: __DIR__.'/../routes/api.php',"
3. Install Sanctum if needed
4. Add the Sanctum middleware in app.php as you dont have kernel.php in laravel 11
