@extends('adminlte::page')
@section('content')



<div class="container container-fluid">
    <div class="row ">
        <div class="col-md-12 col-md-offset-0 ">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <b> LISTADO DE CLIENTES</b>
                    <a href="{{route('custalta')}}" class="btn btn-sm btn-primary pull-right">
                        NUEVO
                    </a>
                </div>
                    <div class="table-responsive">
                        <tr>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <td>Busqueda: </td>
                                        <td><input type="text" class="form-control" placeholder="nombre"></td>
                                        <td><input type="button" class="btn btn-primary" value="Buscar"></td>
                                    </tr>

                                </table>
                            </div>
                        </tr>

                        <table class="table-striped table-hover table-responsive-md ">
                            <thead>
                                 <tr>
                                    <th colspan="1">&nbsp</th>  <!-- 3 puesto que se van a incluir 3 botones  -->
                                    <th>Nombre</th>
                                   <th>Direccion</th>
                                    <th>Poblacion</th>
                                    <th>Cod. Postal</th>
                                    <th>Provincia</th>
                                    <th>Pais</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Cod</th>
                                </tr>
                            </thead>
                            <tbody class="container-fluid">
                                @foreach($customers as $customer)
                                    <tr>
                                        <td style="cursor:pointer">
                                            <a href="{{route('custshow', $customer->id)}}" class="btn btn-sm btn-default">
                                                Ver
                                            </a>
                                        </td>
                                        <td style="cursor:pointer" class="col-md-3 col-md-6" onclick="{{route('custshow', $customer->id)}}">{!! $customer->nombre !!}</td>
                                        <td style="cursor:pointer" class="col-md-8 col-md-12">{!! $customer->direccion !!}</td>
                                        <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $customer->poblacion !!}</td>
                                        <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $customer->cod_postal !!}</td>
                                        <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $customer->provincia !!}</td>
                                        <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $customer->pais !!}</td>
                                        <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $customer->telefono !!}</td>
                                        <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $customer->email !!}</td>
                                        <td style="cursor:pointer" class="col-md-3 col-md-6">{!! $customer->cod_cliente !!}</td>
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