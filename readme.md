<p align="center"><img height="100px" src="https://res.cloudinary.com/bytefury/image/upload/v1545225776/laraspace-logo_cvcsex.png"></p>

## Introduction

Laraspace is an Admin starter template for Laravel 5.6 PHP Framework which includes all the necessary boilerplate for your next web application.

# Table of Contents

1. [Requirements](#requirements)
2. [Installation](#installation)
3. [Features](#features)
4. [Documentation](#documentation)
5. [Versions](#versions)
6. [License](#license)

## Requirements

SERVER REQUIREMENTS:
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

OPTIONAL REQUIREMENTS:
- Composer
- NPM / YARN

## Installation

1. Run `composer create-project --prefer-dist laraspace/laraspace`
2. Using your preferred terminal , go to the laraspace folder and run the following command to set a random secure Application Key `php artisan key:generate`
3. Open `.env` file in your favorite text editor and set the database credentials.
4. Open `database/seeds/UsersTableSeeder.php` and change the admin's email & password to your preference.
5. `php artisan migrate --seed` run this command to migrate & seed the database. ( Make sure that you're inside the app's root directory )
6. Install NPM globally if you haven't installed that already , for more information please refer this [Link](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
7. After installing NPM globally , run `npm install` inside your webroot , it will download all the required dependencies.
8. Run `npm run dev` for compiling sass and js files.
9. Laraspace makes use of `Laravel Mix` for compiling sass files and js files (webpack).
10. You are ready to launch!

## Features
- Multiple Layouts
- Responsive layout
- Pace Loader
- Admin Authentication
- Built-in Settings API
- Automatic Validation Errors
- Easy Notifications API
- Hundreds of UI Components
- Dozens of Widgets
- Sass for CSS preprocessing (compiled CSS included)
- Laravel Mix Configuration
- Clean and Friendly Code
- Detailed Responsive Documentation with examples.
- Dozens of Form Plugins
- Example VueJS Apps
- Vue Admin
- JWT Auth
- Image Cropper
- Star Ratings

## Documentation
You can find the Laraspace documentation <a href="http://docs.laraspace.in" target="_blank">on the website</a>.

## Versions

Laraspace comes with 3 versions
- Default (Laravel + jQuery + VueJS)
- Vue SPA (Laravel + VueJS + Vue-Router) - [Link](http://github.com/laraspace/laraspace-vue)
- HTML - [Link](http://github.com/laraspace/laraspace-html)

## License

Laraspace is now an open-sourced software licensed under the MIT license.
