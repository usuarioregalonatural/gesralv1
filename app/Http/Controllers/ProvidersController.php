<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProvidersFormRequest;
use App\Provider;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // $providers= Provider::all();
       //$providers= Provider::paginate(20);
        $nombre= $request->get('nombre');
        $providers=Provider::orderBy('id','DESC')
            ->name($nombre)
            ->paginate(20);



        return view('providers.index',compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.altaprovider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvidersFormRequest $request)
    {
        $provider = new Provider(array(
            'cod_proveedor' => $request->get('cod_proveedor'),
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'email' => $request->get('email'),
            'web' => $request->get('web')
        ));
        $provider->save();
        return redirect('alta-providers')->with('status','El proveedor ha sido dado de alta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provider= Provider::whereid($id)->firstOrFail();
        return view('providers.show',compact('provider'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider= Provider::whereid($id)->firstOrFail();
        return view('providers.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvidersFormRequest $request, $id)
    {
        $provider= Provider::whereid($id)->firstOrFail();
        $provider->cod_proveedor = $request->get('cod_proveedor');
        $provider->nombre =  $request->get('nombre');
        $provider->direccion = $request->get('direccion');
        $provider->telefono = $request->get('telefono');
        $provider->email = $request->get('email');
        $provider->web =  $request->get('web');

        $provider->save();
        return redirect(action('ProvidersController@edit',$id))->with('status','El proveedor '. $id .'  ha sido actualizado.');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider= Provider::whereid($id)->firstOrFail();
        $provider->delete();
        return redirect('providers')->with('status','El proveedor '. $id .'  ha sido Eliminado.');
    }
}
