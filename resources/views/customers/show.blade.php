@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Cliente: <strong>{!! $customer->nombre !!}</strong></h2>
            </div>
            <div class="well well bs-component">
                <div class="content">
                     <p><strong>Codigo: </strong>{!! $customer->cod_proveedor !!}</p>
                    <p><strong>Dirección: </strong>{!! $customer->direccion !!}</p>
                    <p><strong>Poblacion: </strong>{!! $customer->poblacion !!}</p>
                    <p><strong>Cod. Postal: </strong>{!! $customer->cod_postal !!}</p>
                    <p><strong>Provincia: </strong>{!! $customer->provincia !!}</p>
                    <p><strong>Pais: </strong>{!! $customer->pais !!}</p>
                    <p><strong>Teléfono: </strong>{!! $customer->telefono !!}</p>
                    <p><strong>E-Mail: </strong>{!! $customer->email !!}</p>

                </div>
                 <a href="{!! action('CustomersController@edit',$customer->id) !!}" class="btn btn-info pull-left">Editar</a>
                <form method="POST" action="{!! action('CustomersController@destroy',$customer->id) !!}" class="pull-left">
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
