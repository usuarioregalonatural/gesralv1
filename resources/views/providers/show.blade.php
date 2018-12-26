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
                    <p><strong>Teléfono: </strong>{!! $provider->telefono !!}</p>
                    <p><strong>E-Mail: </strong>{!! $provider->email !!}</p>
                    <p><strong>Web: </strong>{!! $provider->web !!}</p>
                </div>
                 <a href="{!! action('ProvidersController@edit',$provider->id) !!}" class="btn btn-info pull-left">Editar</a>
                <form method="POST" action="{!! action('ProvidersController@destroy',$provider->id) !!}" class="pull-left">
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
