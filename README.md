

Hello everyone !!

$ cd fin-blog
$ cp .env.example .env
$ composer install
$ npm install
```

## Setup and Run 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=finblog
DB_USERNAME=root
DB_PASSWORD=
```
<Strong>Step 2:</Strong>
$ php artisan migrate
$ php artisan db:seed
$ php artisan key:generate