@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Subcategoria: <strong>{!! $subcatproduct->des_subcategoria !!}</strong></h2>
            </div>
            <div class="well well bs-component">
                <div class="content">
                    <div class="form-group">
                     {{ Form::label('categoria_id','Categoria:') }}    {{ Form::label('categoria',$categorias->des_categoria) }}
                    </div>

                    <p><strong>Código: </strong>{!! $subcatproduct->cod_subcategoria !!}</p>

                </div>
                 <a href="{!! action('SubcatProductsController@edit',$subcatproduct->id) !!}" class="btn btn-info pull-left">Editar</a>
                <form method="POST" action="{!! action('SubcatProductsController@destroy',$subcatproduct->id) !!}" class="pull-left">
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
