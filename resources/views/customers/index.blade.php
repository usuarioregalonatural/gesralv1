@extends('adminlte::page')
@section('content')

<div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default"> <!-- Panel Principal -->
            <div class="panel-heading">
                <h2>Clientes</h2>
            </div>
            <!-- Ventana flotante-->
            <div class="col-sm-7">
                <a href="#" class="btn btn-primary pull-left" data-toggle="modal" data-target="#create-customer">
                    Nuevo Cliente
                </a>
            @include('customers/create-customer')
            </div>
            <!-- Ventana flotante-->
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        @if ($customers->isEmpty())
                <p>No hay clientes almacenados</p>
            @else


            <div class="table-responsive"> <!-- CLASE TABLA 1 -->
                <!-- Parte de busqueda -->
                <div class="box box-solid box-primary"> <!-- box -->
                        <div class="box-header with-border"> <!-- box-header -->
                            <h3 class="box-title">Busqueda</h3>
                        </div>                      <!-- box-header -->
                        <div class="box-body">       <!-- box-body -->
                     <!-- FORMULARIO DE BUSQUEDA -->
                            {{ Form::open(['route'=> 'customers', 'method'=>'GET'])}}
                            <div class="form-group">
                                {{Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'nombre'])}}
                            </div>
                            <div class="form-group">
                                {{Form::text('poblacion', null, ['class'=>'form-control', 'placeholder'=>'poblacion'])}}
                            </div>
                        </div>                      <!-- box-body -->
                        <div class="box-footer">    <!-- box-footer -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <span class="search"></span>
                                </button>
                            </div>
                        </div>                      <!-- box-footer -->
                    {{ Form::close() }}
                <!-- FORMULARIO DE BUSQUEDA -->

                </div>  <!-- box -->
           </div> <!-- CLASE TABLA 1 -->
        </div> <!-- Panel Principal -->



 <!-- CAJA DE DATOS-->
    <div class="table-responsive">
 <!-- CAJA DE DATOS-->
        <div class="box box-solid box-primary">
            <!-- DATOS-->

                <table class="table table-hover table-fixed">
                    <thead>
                    <div class="box-header with-border"> <!-- Caja Header -->
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
                    </div> <!-- Caja Header -->
                    </thead>
                    <div class="box-body"> <!-- Caja Body -->
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
                    </div> <!-- Caja Body -->
                </table>
        <!-- DATOS-->

    </div>
        <!-- CAJA DE DATOS-->
    </div>
             @endif
</div>


@endsection