# Tutorial para implementar una busqueda simple en Laravel

## Creación del nuevo proyecto
Dentro de la carpeta de proyectos, escribimos:

```bash
composer create-project --prefer-dist laravel/laravel busqueda
```
una vez creado el nuevo proyecto, nos vamos a su carpeta "/busqueda" e instalamos **Collective**
```php
composer require laravelcollective/html
 ```
 
 Despues, en el proyecto, realizamos la configuración de Collective en <code>config/app.php/</code> en el apartado *providers* :
 ```php
         App\Providers\RouteServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,  <-- Esta
 ```
 y en el apartado *aliases*
```php
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Form' => Collective\Html\FormFacade::class,    <-- Esta

```
Para esta prueba, vamos a eliminar la migración de passwords, iremos a database/migrations y eliminaremos el fichero de passwords.

Luego nos iremos a database/seeds/DatabaseSeeder.php y descomentar la linea de la función run

Después nos vamos al terminal y ejecutamos
```php
php artisan make:seeder UsersTableSeeder
```

esto nos generará el archivo database/seeds/UsersTableSeeder.php
y dentro de él, creremos lo siguiente:
 ```php
     public function run()
    {
        factory(App\User::class, 600)->create();
    }
    
```
esto nos creará 600 registros de prueba

