# Laravel Boilerplate

[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)

## About This App

This App is to provide boilerplate for common features when using Laravel framework. Such as:

- Authentication (*For testing use mailpit or any other mail service to send email verification and password reset.*)
- Authorization
- User level access control
- User roles and permissions
- User management
- And more soon

## How to use this App

For learning you can refer to the [Laravel Documentation](https://laravel.com/docs) for better understanding of the framework. You can also refer to the [Laracasts](https://laracasts.com) for video tutorials. Or you can also refer to the [Laravel Bootcamp](https://bootcamp.laravel.com) for a guided learning experience.

### Prerequisites

1. Clone the repository
2. run composer install to generate depedencies in vendor folder

    ```bash
    composer install
    ```

3. change .env.example to .env
4. run php artisan key:generate

    ```bash
    php artisan key:generate
    ```

5. configure .env
6. Install node modules

    ```bash
    npm install
    ```

    or

    ```bash
    npm i
    ```

7. To clear all cache

    ```bash
    php artisan optimize:clear
    ```

8. To migrate fresh database with seed

    ```bash
    php artisan migrate:fresh --seed
    ```

9. Alternatively can use the following command to chain all the commands together

    ```bash
    composer install; composer update; npm install; php artisan optimize:clear; php artisan migrate:fresh --seed
    ```

To **start the server**

```bash
php artisan serve
```

## Contributing

Thank you for considering contributing to the App! The contribution guide can be found in the [Documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the App community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within App, please make a GitHub Issues or Pull Request to make app better. All security vulnerabilities will be promptly addressed.

## License

The App is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
