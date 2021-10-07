Для подгрузки пакетов требуется композер (composer), его можно установить с официального сайта. После слива репозитория на локальный компьютер трубется через терминал перейти в папку с проектом и прописать команду "composer install" после чего установятся все необходимые для проекта зависимости.
Также чтоб можно было пользоваться проектом требуется установить базу данных. (На локальном у меня стоит phpmyadmin, на серверах можно просто через MySql)
После установки пакетов и создания базы данных её необходимо указать для проекта. Для этого нужно найти файл .env_example и переименовать его в .env . Внутри указать данные от базы данных и пользователя на которого эта база создана. 
После подключения БД  требуется запустить миграции при помощи команды php artisan migrate.
Для корректной работы также требуется создать уникальный ключ проекта при помощи команды  php artisan key:generate

После завершения всех махинаций нужно запустить сервер, для этого в терминале нужно прописать php artisan serve и перейти по предложженной терминалом ссылке. 


# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
