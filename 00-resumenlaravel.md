## Resumen "grueso" para incorporar entidades a laravel

* Crear la migración
```bash
	php artisan make:migration create_providers_table --create=providers
```
* Editar el fichero de migración generado para incluir nuevos campos

* Ejecutar la migración

```bash
php artisan migrate
```
* Crear el modelo

```bash
	php artisan make:model Provider
```

* Crear Controlador
```bash
	php artisan make:controller ProvidersController --resource
```

*********************************************************
* Crear los Request
*********************************************************
```php
  php artisan make:request ProvidersFormRequest
```

	Después modificar e true en la funcion authorize()

	Poner reglas en rules
```php
			 return [
		            'nombre' => 'required|min:3',
		            //
		        ];
```            
    Referenciar al Request en el archvo del Controller
```php
    	use App\Http\Requests\ProvidersFormRequest;
```
*********************************************************
* Crear las rutas del modelo en router/web.php
*********************************************************
```php
//Clientes
		Route::get('/alta-customers', 'CustomersController@create');
		Route::post('/alta-customers', 'CustomersController@store');
		Route::get('/customers', 'CustomersController@index');
		Route::get('/customers/{id?}', 'CustomersController@show');
		Route::get('/customers/{id?}/edit', 'CustomersController@edit');
		Route::post('/customers/{id?}/delete', 'CustomersController@destroy');
		Route::post('customers/{id?}/edit', 'CustomersController@update');
```
*********************************************************
* Modificar el Contoller para todas las acciones:
*********************************************************
 ```php
 public function index()
    {
        $customers= Customer::all();
        return view('customers.index',compact('customers'));

    }

   public function create()
    {
        return view('customers.altacustomer');

    }


   public function store(CustomersFormRequest $request)
    {
        $customer = new Customer(array(
            'cod_cliente' => $request->get('cod_cliente'),
            'nombre' => $request->get('nombre')
     ));
        $customer->save();
        return redirect('alta-customers')->with('status','El cliente ha sido dado de alta.');
    }


        public function show($id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        return view('customers.show',compact('customer'));

    }



    public function edit($id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        return view('customers.edit',compact('customer'));
    }


       public function update(CustomersFormRequest $request, $id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        $customer->cod_cliente = $request->get('cod_cliente');
        $customer->nombre =  $request->get('nombre');
 
        $customer->save();
        return redirect(action('CustomersController@edit',$id))->with('status','El cliente '. $id .'  ha sido actualizado.');

    }   

     public function destroy($id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        $customer->delete();
        return redirect('customers')->with('status','El cliente '. $id .'  ha sido eliminado.');

    }

```
*********************************************
* Modificar el menu en config/adminlte.php
*********************************************
```php
  'PROVEEDORES',
        [
            'text'        => 'Nuevo',
            'url'         => 'providers', <-- aqui
            'icon'        => 'briefcase',
            'icon_color'  => 'yellow',
            'label_color' => 'success',
        ],

```
*********************************************
* Crear la página de vista de Altas  
*********************************************
```php
/resources/views/tabla/altas.php
```
*********************************************
* Incluir el modelo en el Controller 
*********************************************
```php
xxxxcontoller.php
use App\Provider;
```

*********************************************
* Añadir en el modelo los campos a ingresar 
*********************************************
```php
class Provider extends Model
 {
 
     protected $fillable =['cod_proveedor','nombre','direccion', 'telefono','email','web'];
```

*********************************************
* Crear la página de vista de Listado (/resources/views/tabla/index.php)  
*********************************************

*********************************************
* Crear la página de vista de 1 elemento (/resources/views/tabla/show.php)  
*********************************************

*********************************************
* Crear la página de vista para Editar 1 elemento (/resources/views/tabla/edit.php)  
*********************************************


