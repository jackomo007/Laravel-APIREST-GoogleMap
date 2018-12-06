<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<p align="center"><img src="https://1.bp.blogspot.com/-lBaeJEyLVYY/WwR7stGIPoI/AAAAAAAABic/f0mMXRJ4gfwuw_c-yXsc-fJBeVdbQfXLgCLcBGAs/s1600/Google%2BMaps%2Balt.png" width="250" height="100"></p>

## Instructions:

- Clone the repo and cd into it
- composer install
- Rename or copy .env.example file to .env
- php artisan key:generate
- Set your database credentials in your .env file
- Pasar los parametros de conexion en el archivo .env (usar el .env.example)
- Run in tinker the commands:
1. factory(App\User::class,10)->create()
2. factory(App\Map::class,10)->create()
- Run the server
- Create a user
-Test in Postman (or you preference) the routes in order:
1.http://127.0.0.1:8000/api/login/
2.http://127.0.0.1:8000/api/home (In the header use Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)
3.http://127.0.0.1:8000/api/home/1 (In the header use Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)
4.http://127.0.0.1:8000/api/logout/

