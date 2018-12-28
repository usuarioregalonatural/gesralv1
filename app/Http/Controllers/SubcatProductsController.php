<?php

namespace App\Http\Controllers;

use App\CatProduct;
use App\SubcatProduct;
use Illuminate\Http\Request;
use App\Http\Requests\SubcatProductsRequest;

class SubcatProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $des_subcategoria= $request->get('des_subcategoria');
        $subcatproducts=SubcatProduct::orderBy('id','DESC')
            ->name($des_subcategoria)
            ->paginate(20);

        return view('subcatproducts.index',compact('subcatproducts','categorias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=CatProduct::orderBy('des_categoria','ASC')->pluck('des_categoria','id');
        return view('subcatproducts.add', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcatproduct = new SubcatProduct(array(
            'cod_subcategoria' => $request->get('cod_subcategoria'),
            'des_subcategoria' => $request->get('des_subcategoria'),
            'categoria_id' => $request->get('categoria_id')
        ));
        $subcatproduct->save();
        return redirect('alta-subcatprods')->with('status','La subcategoria de producto ha sido dado de alta.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcatproduct= SubcatProduct::whereid($id)->firstOrFail();
        $categorias=CatProduct::find($subcatproduct->categoria_id);


        return view('subcatproducts.show',compact('subcatproduct','categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=CatProduct::orderBy('des_categoria','ASC')->pluck('des_categoria','id');
        $subcatproduct= SubcatProduct::whereid($id)->firstOrFail();
        return view('subcatproducts.edit',compact('subcatproduct','categorias'));
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
        $subcatproduct= SubcatProduct::whereid($id)->firstOrFail();
        $subcatproduct->cod_subcategoria = $request->get('cod_subcategoria');
        $subcatproduct->des_subcategoria =  $request->get('des_subcategoria');

        $subcatproduct->save();
        return redirect(action('SubcatProductsController@edit',$id))->with('status','La subcategoria de producto '. $id .'  ha sido actualizada.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcatproduct= SubcatProduct::whereid($id)->firstOrFail();
        $subcatproduct->delete();
        return redirect('subcatprods')->with('status','La subcategoria de producto '. $id .'  ha sido eliminada.');

    }
}
