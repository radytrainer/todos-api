<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Setup
> Clone project <br>
> * htdoc/  [for Xampp] <br>
> * www/ [for Wamp] <br>
## Install package
> composer install

## Connect to Database
> * database name: <b>todo_api.sql</b> <br>
> * copy .env.example to .env
> * DB_DATABASE=todo_api
> * php artisan migrate

## Run Project

> * php artisan serve --port 3000 // you can put any port like you want

## Test API 

> * http://localhost:3000/api/todos
> * http://localhost:3000/api/todos/1
> * http://localhost:3000/api/users
> * http://localhost:3000/api/users/1
