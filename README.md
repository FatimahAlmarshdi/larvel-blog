

Hello everyone !!
I am Fatimah ....


-
![صورة واتساب بتاريخ 1446-01-18 في 21 54 47_c1f2f9d2](https://github.com/user-attachments/assets/5ba23791-a7f5-40fa-8782-fca61a4371be)



Step 1:
- cd fin-blog
- cp .env.example .env
- composer install
- npm install
```

## Setup and Run 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=finblog
DB_USERNAME=root
DB_PASSWORD=
```
Step 2:
- php artisan migrate
- php artisan db:seed
- php artisan key:generate
