@extends('adminlte::page')
@section('content')
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12 col-md-offset-0 ">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <b>LISTADO DE PROVEEDORES</b>
                        <a href="{{route('provalta')}}" class="btn btn-sm btn-primary pull-right">
                            NUEVO
                        </a>
                    </div>
                    <div class="table-responsive">
                        <tr>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <td>Busqueda: </td>
                                        {{ Form::open(['route'=> 'providers', 'method'=>'GET']) }}
                                        <td>{{Form::text ('nombre',null, ['class'=>'form-control', 'placeholder'=>'nombre'])}}</td>
                                        <!--       <td><input type="text" class="form-control" placeholder="nombre"></td> -->
                                        <td><button type="submit" class="btn btn-primary">Buscar</button></td>
                                        <!--   <td><input type="button" class="btn btn-primary" value="Buscar"></td> -->
                                    </tr>
                                </table>
                            </div>
                        </tr>

                        <table class="table-striped table-hover table-responsive-md ">
                            <thead>
                            <tr>
                                <th colspan="1">&nbsp</th>  <!-- 3 puesto que se van a incluir 3 botones  -->
                                <th>Cod</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Email</th>
                                <th>Web</th>
                            </tr>
                            </thead>
                            <tbody class="container-fluid">
                            @foreach($providers as $provider)
                                <tr>
                                    <td style="cursor:pointer">
                                        <a href="{{route('provshow', $provider->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                    </td>
                                    <td style="cursor:pointer" class="col-md-1 col-md-1">{!! $provider->cod_proveedor !!}</td>
                                    <td style="cursor:pointer" class="col-md-3 col-md-6">{!! $provider->nombre !!}</td>
                                    <td style="cursor:pointer" class="col-md-8 col-md-12">{!! $provider->direccion !!}</td>
                                    <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $provider->telefono !!}</td>
                                    <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $provider->email !!}</td>
                                    <td style="cursor:pointer"class="col-md-3 col-md-6">{!! $provider->web !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $providers->render() !!}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection