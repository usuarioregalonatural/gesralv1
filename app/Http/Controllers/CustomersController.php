<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomersFormRequest;
use App\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers= Customer::all();
        return view('customers.index',compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.altacustomer');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomersFormRequest $request)
    {
        $customer = new Customer(array(
            'cod_cliente' => $request->get('cod_cliente'),
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'poblacion' => $request->get('poblacion'),
            'cod_postal' => $request->get('cod_postal'),
            'provincia' => $request->get('provincia'),
            'pais' => $request->get('pais'),
            'email' => $request->get('email')
        ));
        $customer->save();
        return redirect('alta-customers')->with('status','El cliente ha sido dado de alta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        return view('customers.show',compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomersFormRequest $request, $id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        $customer->cod_cliente = $request->get('cod_cliente');
        $customer->nombre =  $request->get('nombre');
        $customer->direccion = $request->get('direccion');
        $customer->telefono = $request->get('telefono');
        $customer->poblacion = $request->get('poblacion');
        $customer->cod_postal = $request->get('cod_postal');
        $customer->provincia = $request->get('provincia');
        $customer->pais =  $request->get('pais');
        $customer->email = $request->get('email');

        $customer->save();
        return redirect(action('CustomersController@edit',$id))->with('status','El cliente '. $id .'  ha sido actualizado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer= Customer::whereid($id)->firstOrFail();
        $customer->delete();
        return redirect('customers')->with('status','El cliente '. $id .'  ha sido eliminado.');

    }
}
