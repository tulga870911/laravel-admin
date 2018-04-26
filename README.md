# laravel-adminpanel

## Introduction
* This is a laravel Admin Panel.
* The project is taken to Laravel 5.5.
  
## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

    git clone https://github.com/tulga870911/laravel-admin.git
    cd laravel-admin
    cp .env.example .env
    composer install
    npm install
    npm run development
    php artisan key:generate
    php artisan jwt:secret
    php artisan vendor:publish --tag=lfm_public

## Logging In

`php artisan db:seed` adds three users with respective roles. The credentials are as follows:

* Admin Istrator: `admin@admin.com`
* Backend User: `executive@executive.com`
* Default User: `user@user.com`

Password: `1234`