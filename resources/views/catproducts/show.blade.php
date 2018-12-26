@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Categoria: <strong>{!! $catproduct->des_categoria !!}</strong></h2>
            </div>
            <div class="well well bs-component">
                <div class="content">
                     <p><strong>Código: </strong>{!! $catproduct->cod_categoria !!}</p>

                </div>
                 <a href="{!! action('CatProductsController@edit',$catproduct->id) !!}" class="btn btn-info pull-left">Editar</a>
                <form method="POST" action="{!! action('CatProductsController@destroy',$catproduct->id) !!}" class="pull-left">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div>
                        <button type="submit" class="btn btn-warning">Eliminar</button>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
