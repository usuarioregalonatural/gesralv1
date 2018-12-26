<?php

namespace App\Http\Controllers;

use App\CatProduct;
use Illuminate\Http\Request;
use App\Http\Requests\CatProductsFormRequest;

class CatProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catproducts= CatProduct::all();
        return view('catproducts.index',compact('catproducts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catproducts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catproduct = new CatProduct(array(
            'cod_categoria' => $request->get('cod_categoria'),
            'des_categoria' => $request->get('des_categoria')
        ));
        $catproduct->save();
        return redirect('alta-catprods')->with('status','La categoria de producto ha sido dado de alta.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catproduct= CatProduct::whereid($id)->firstOrFail();
        return view('catproducts.show',compact('catproduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catproduct= CatProduct::whereid($id)->firstOrFail();
        return view('catproducts.edit',compact('catproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catproduct= CatProduct::whereid($id)->firstOrFail();
        $catproduct->cod_categoria = $request->get('cod_categoria');
        $catproduct->des_categoria =  $request->get('des_categoria');

        $catproduct->save();
        return redirect(action('CatProductsController@edit',$id))->with('status','La categoria de producto '. $id .'  ha sido actualizada.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catproduct= CatProduct::whereid($id)->firstOrFail();
        $catproduct->delete();
        return redirect('catprods')->with('status','La categoria de producto '. $id .'  ha sido eliminada.');

    }
}
