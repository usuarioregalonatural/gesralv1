@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Proveedores</h2>
            </div>
            @if ($providers->isEmpty())
                <p>No hay proveedores almacenados</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Web</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($providers as $provider)
                            <tr>
                                <td>{!! $provider->cod_proveedor !!}</td>
                                <td><a href="{!! action('ProvidersController@show', $provider->id) !!}" >{!! $provider->nombre !!}</a></td>
                                <td>{!! $provider->direccion !!}</td>
                                <td>{!! $provider->telefono !!}</td>
                                <td>{!! $provider->email !!}</td>
                                <td>{!! $provider->web !!}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
             @endif
      </div>
  </div>

@endsection