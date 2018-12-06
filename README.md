<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<p align="center"><img src="https://1.bp.blogspot.com/-lBaeJEyLVYY/WwR7stGIPoI/AAAAAAAABic/f0mMXRJ4gfwuw_c-yXsc-fJBeVdbQfXLgCLcBGAs/s1600/Google%2BMaps%2Balt.png" width="250" height="100"></p>

## Instructions:

- Clone the repo and cd into it
- Composer install
- Rename or copy .env.example file to .env
- Run php artisan key:generate
- Set your database credentials in your .env file
- Add the ApiKey of GoggleMaps in the file googlemaps.php
- Run in tinker the commands:
1. factory(App\User::class,10)->create()
2. factory(App\Map::class,10)->create()
- Run the server
- Create a user
- Test in Postman (or you preference) the routes in order:

1.http://127.0.0.1:8000/api/login/ <br>
2.http://127.0.0.1:8000/api/home <br>
(In the header use Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)<br>
3.http://127.0.0.1:8000/api/home/1 <br>
(In the header use Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)<br>
4.http://127.0.0.1:8000/api/logout/

## Instrucciones:

- Clona el repositorio y entra en él.
- Instala el composer
- Renombra o copia el archivo .env.example a .env
- Ejecuta php artisan key:generate
- Establezca sus credenciales de base de datos en su archivo .env
- Agregar la ApiKey de GoggleMaps en el archivo googlemaps.php
- Ejecutar en tinker los comandos:
1. factory(App\User::class,10)->create()
2. factory(App\Map::class,10)->create()
- Ejecutar el servidor
- Crear un usuario
- Prueba en Postman (o el de tu prefierencia) las rutas en el siguiente orden:
1.http://127.0.0.1:8000/api/login/ <br>
2.http://127.0.0.1:8000/api/home <br>
(En el header usa Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)<br>
3.http://127.0.0.1:8000/api/home/1 <br>
(En el header usa Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)<br>
4.http://127.0.0.1:8000/api/logout/

## Instruções:

- Clone o repositório e fazer cd no.
- Instale o compositor
- Renomeie ou copie o arquivo .env.example para arquivo .env
- Execute o comando php artisan key: generate
- Defina suas credenciais de banco de dados em seu arquivo .env
- Adicione o ApiKey do GoggleMaps no arquivo googlemaps.php
- Execute os comandos no tinker:
1. factory(App\User::class,10)->create()
2. factory(App\Map::class,10)->create()
- Execute o servidor
- Crie um usuário
- Teste nas rotas no Postman (ou de sua preferência) na seguinte ordem:
1.http://127.0.0.1:8000/api/login/ <br>
2.http://127.0.0.1:8000/api/home <br>
(No header usar Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)<br>
3.http://127.0.0.1:8000/api/home/1 <br>
(No header usar Authorization Bearer ggtxo75aDwt6RMt0cwlNGiqgu4N5vlv0NumRf2QNwds0vnivKZ7WaPWEe1mU)<br>
4.http://127.0.0.1:8000/api/logout/