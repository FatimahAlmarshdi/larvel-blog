

Hello everyone !!
I am Fatimah ....


-
![image](https://github.com/user-attachments/assets/ed9e9e1d-4e8f-4a34-be13-e59a06f72f00)



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
