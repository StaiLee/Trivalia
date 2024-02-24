# Trivalia - e-commerce php project

![traivalia main](https://github.com/StaiLee/Trivalia/assets/102300908/ea941983-ca7f-4dda-90a9-4a160e6e7614)


## About

Trivalia is an e-commerce website built with Laravel. We are a team of professional photographers who travel the world to capture the most beautiful shots possible. We offer personalized photos and subscriptions to deliver an unforgettable experience !

## Features

- **Personalized Photos:** Receive custom-made photographs tailored to your preferences.
- **Subscription Plans:** Choose from a variety of subscription options for an enhanced experience.
- **Global Photography:** Explore the world through our curated collection of high-quality images.
- **User Authentication:** Secure access to your account with login functionality.
- **User Registration:** Easily create a new account to access exclusive features.


## Technologies

Trivalia utilizes the following technologies:

- **Laravel:** A powerful PHP framework for building web applications.
- **MySQL:** An open-source relational database management system.
- **HTML/CSS:** Standard markup language and styling for web development.
- **JavaScript:** Programming language for adding interactivity to web pages.
- **Bootstrap:** Front-end framework for developing responsive and mobile-first websites.
- **Composer:** Dependency manager for PHP, used for installing and managing packages.

## Getting Started

To get started with Trivalia, follow these steps:

1. Install PHP dependencies:
    ```bash
    composer install
    ```

2. Install Laravel Jetstream:
    ```bash
    composer require laravel/jetstream
    ```

3. Update NPM packages:
    ```bash
    npm update
    ```

4. Compile assets:
    ```bash
    npm run build
    ```

5. Copy the `.env.example` file and rename it to `.env`:
    ```bash
    cp .env.example .env
    ```

6. Generate an application key:
    ```bash
    php artisan key:generate
    ```

7. Update the `DB_DATABASE` value in the `.env` file to your desired database name (e.g., `DB_DATABASE=trivaliadb`).

8. Run database migrations:
    ```bash
    php artisan migrate
    ```

9. Finally, start the development server:
    ```bash
    php artisan serve
    ```

You're now ready to launch the Trivalia project!

