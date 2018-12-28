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
### Cambios en el fichero SubcatProductsController

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




