@extends('adminlte::page')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    LISTADO DE CLIENTES
                    <a href="{{route('custalta')}}" class="btn btn-sm btn-primary pull-right">
                        NUEVO
                    </a>
                </div>
                    <div class="panel-body">
                        <table class="table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="30px">Cod</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Poblacion</th>
                                    <th>Cod. Postal</th>
                                    <th>Provincia</th>
                                    <th>Pais</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th colspan="3">&nbsp</th>  <!-- 3 puesto que se van a incluir 3 botones  -->
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
                                        <td>
                                            <a href="{{route('custshow', $customer->id)}}" class="btn btn-sm btn-default">
                                                Ver
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $customers->render() !!}
                    </div>
            </div>
        </div>

    </div>

</div>

@endsection