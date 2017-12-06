# laravel-adminpanel
[![GitHub license](https://img.shields.io/github/license/viralsolani/laravel-adminpanel.svg?style=plastic)](https://github.com/viralsolani/laravel-adminpanel/blob/master/LICENSE.txt)
[![GitHub stars](https://img.shields.io/github/stars/viralsolani/laravel-adminpanel.svg?style=plastic)](https://github.com/viralsolani/laravel-adminpanel/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/viralsolani/laravel-adminpanel.svg?style=plastic)](https://github.com/viralsolani/laravel-adminpanel/network)
[![GitHub issues](https://img.shields.io/github/issues/viralsolani/laravel-adminpanel.svg?style=plastic)](https://github.com/viralsolani/laravel-adminpanel/issues)
![StyleCI](https://img.shields.io/badge/styleCI-passed-brightgreen.svg?style=plastic)


## Introduction
* This is a laravel Admin Panel, based on [Rappasoft Laravel Boilerplate](https://github.com/rappasoft/laravel-5-boilerplate/releases/tag/4.5.7), with enhancemenets and many modules pre-made, just for you.
* The project is taken to Laravel 5.5 so we can develop from the latest Laravel.

## Features
For Laravel 5 Boilerplate Features : [Features](https://github.com/rappasoft/laravel-5-boilerplate/wiki#features)

## Additional Features
* Built-in Laravel Boilerplate CRUD Generator,
* Dynamic Menu/Sidebar Builder
* CMS Pages Module
* Email Template Module
* Blog Module
* FAQ Module
* API Boilerplate.

Give your project a Head Start by using [laravel-adminpanel](https://github.com/viralsolani/laravel-adminpanel).

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/viralsolani/laravel-adminpanel.git

Switch to the repo folder

    cd laravel-adminpanel

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Install all the dependencies using composer

    composer install

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:secret

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeders

    php artisan db:seed

Install the javascript dependencies using npm

    npm install

Compile the dependencies

    npm run development

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/viralsolani/laravel-adminpanel.git
    cd laravel-adminpanel
    cp .env.example .env
    composer install
    npm install
    npm run development
    php artisan key:generate
    php artisan jwt:generate

## Logging In

`php artisan db:seed` adds three users with respective roles. The credentials are as follows:

* Admin Istrator: `admin@admin.com`
* Backend User: `executive@executive.com`
* Default User: `user@user.com`

Password: `1234`

## ScreenShots

## Dashboard
![Screenshot](screenshots/dashboard.png)

## User Listing
![Screenshot](screenshots/users.png)

## Settings
![Screenshot](screenshots/settings.png)

## Issues

If you come across any issues please report them [here](https://github.com/viralsolani/laravel-adminpanel/issues).

## Contributing
Feel free to create any pull requests for the project. For propsing any new changes or features you want to add to the project, you can send us an email at viral.solani@gmail.com or basapativipulkumar@gmail.com.

## License

[MIT LICENSE](https://github.com/viralsolani/laravel-adminpanel/blob/master/LICENSE.txt)
