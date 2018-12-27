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

Por último, configuramos la bbdd en el fichero .env.

y ahora rellenamos de datos la tabla de prueba
En el terminal:
```php
php artisan migrate:refresh --seed
```

### Creación de la vista
vamos a resources/views/welcome.blade.php y la renombramos por users.blade.php
borramos todo


## FORMULARIO DE BUSQUEDA

```html
                            <h4>Busqueda de Usuarios
                                {{ Form::open(['route'=> 'customers', 'method'=>'GET',  'class'=>'form-inline pull-right'])}}
                                <div class="form-group">
                                    {{Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'nombre'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::text('poblacion', null, ['class'=>'form-control', 'placeholder'=>'poblacion'])}}
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">
                                        <span class=" icon search"></span>
                                    </button>
                                </div>

                                {{ Form::close() }}
                            </h4>
```

