@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Clientes</h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        @if ($customers->isEmpty())
                <p>No hay clientes almacenados</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Poblacion</th>
                            <th>Cod. Postal</th>
                            <th>Provincia</th>
                            <th>Pais</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{!! $customer->cod_cliente !!}</td>
                                <td><a href="{!! action('CustomersController@show', $customer->id) !!}" >{!! $customer->nombre !!}</a></td>
                                <td>{!! $customer->direccion !!}</td>
                                <td>{!! $customer->poblacion !!}</td>
                                <td>{!! $customer->cod_postal !!}</td>
                                <td>{!! $customer->provincia !!}</td>
                                <td>{!! $customer->pais !!}</td>
                                <td>{!! $customer->telefono !!}</td>
                                <td>{!! $customer->email !!}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
             @endif
      </div>
  </div>

@endsection