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
