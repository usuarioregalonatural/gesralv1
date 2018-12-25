@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Proveedor: <strong>{!! $provider->nombre !!}</strong></h2>
            </div>
            <div class="well well bs-component">
                <div class="content">
                     <p><strong>Codigo: </strong>{!! $provider->cod_proveedor !!}</p>
                    <p><strong>Dirección: </strong>{!! $provider->direccion !!}</p>
                </div>
                 <a href="{!! action('ProvidersController@edit',$provider->id) !!}" class="btn btn-info">Editar</a>
                <a href="#" class="btn btn-info">Borrar</a>
            </div>
        </div>
    </div>

@endsection
