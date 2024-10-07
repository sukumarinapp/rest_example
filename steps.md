Laravel v9.5.2 REST API
-----------------------
php artisan vendor:publish --tag=laravel-assets --ansi --force
php artisan key:generate --ansi

1)composer create-project laravel/laravel rest_example
2)php artisan make:model Book -m
3)php artisan make:controller BookController

http://127.0.0.1:8000/api/books

