#Tablas relacionadas

## Relacionando en la creación dentro de la bbdd

Al crear la migración de la nueva tabla, se indicará el campo nuevo que relaciona con la otra tabla además de la relación.

```php
  public function up()
    {
        Schema::create('subcat_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_subcategoria');
            $table->integer('categoria_id')->unsigned();  <- Este es el ID de la tabla con la que se relaciona
            $table->string('des_subcategoria');
            $table->timestamps();

            //Relaciones
            $table->foreign('categoria_id')->references('id')->on('cat_products') <- Aquí se indica la realación
            ;


        });
    }
```
Después continuamos con la creación de todos los controllers, modelo, vistas, etc. como con cualquier otra entidad.

## Relacionando en la aplicación
### Cambios en el fichero <code>SubcatProductsController.php</code>

Primero pasaremos el listado completo de las Categorias en la función Create
```php
   public function create()
    {
        $categorias=CatProduct::orderBy('des_categoria','ASC')->pluck('des_categoria','id');
        return view('subcatproducts.add', compact('categorias'));
    }


```
Como vamos a pasar todos los registros de Categorias, ahora, realmente solo nos interesa la **Descripción de la categoria** y el **ID categoria** para ello utilizamos el metodo <code>pluck</code>
Luego, devolvemos los datos de las categorias a la vista <code>subcatproducts.add</code> utilizando *compact*
Si necesitaramos enviar más de una lista de datos, añadiriamos otra linea como la de $categorias=CatProduc... y añadiriamos en *compact* también esa nueva variable:
```php
   public function create()
    {
        $categorias=CatProduct::orderBy('des_categoria','ASC')->pluck('des_categoria','id');
        $otralista=CatOtra::orderBy('des_categoria','ASC')->pluck('des_categoria','id');
        return view('subcatproducts.add', compact('categorias','otralista'));
    }
```

Esto había que añadirlo también para la función edit
```php
    public function edit($id)
    {
        $categorias=CatProduct::orderBy('des_categoria','ASC')->pluck('des_categoria','id'); <--Nuevo
        $subcatproduct= SubcatProduct::whereid($id)->firstOrFail();
        return view('subcatproducts.edit',compact('subcatproduct','categorias')); <-- Se pasa además 'categorias'
    }
```

Y modificar la parte de Store para añadir el campo relacionado
 ```php
    public function store(Request $request)
    {
        $subcatproduct = new SubcatProduct(array(
            'cod_subcategoria' => $request->get('cod_subcategoria'),
            'des_subcategoria' => $request->get('des_subcategoria'),
            'categoria_id' => $request->get('categoria_id') <--Este campo
        ));
        $subcatproduct->save();
        return redirect('alta-subcatprods')->with('status','La subcategoria de producto ha sido dado de alta.');

    }

 ```
Asegurarse que al principio del controlador <code>SubcatProductsController</code>, se referencia a las entidades de las cuales obtenemos datos:
```php
<?php

namespace App\Http\Controllers;

use App\CatProduct; <--Aqui
use App\SubcatProduct;
use Illuminate\Http\Request;
use App\Http\Requests\SubcatProductsRequest;

...

```

### Cambios en el Formulario <code>add.blade.php</code>

```php
                 <!-- Categoria -->
                 <div class="form-group">
                     {{ Form::label('categoria_id','Categoria') }}
                     {{ Form::select('categoria_id',$categorias,null,['class'=>'form-control'])}}
                 </div>
```
Aquí indicaremos un label para visualizar y luego un *select* en el cual recogemos el id (categoria_id) de la variable $categorias que es la que devolvemos en el Controller con todas las categorias.





