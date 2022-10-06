
# Task-NextG

- php -v 8.0.2

- composer install
- cp .env.example .env
- php artisan key:generate
- edit .env DB_CONNECTION
- edit .env -> CACHE_DRIVER=database
- php artisan migrate
