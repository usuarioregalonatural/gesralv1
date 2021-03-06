@extends('adminlte::page')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >

        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
        </section>
-->
        <!-- Main content -->
        <section class="content">

            <div class="container col-md-8 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Editar Cliente</h2>
                    </div>
                    <div class="table-responsive">

                        <!--                        <form class="form form-group-sm" method="POST">  -->
                        <form class="form form-group" method="POST">
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="card-body">
                                <!-- Codigo -->
                                <div class="form-group">
                                    <label for="nombre" class="col-sm-2 control-label">Código:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="codigo" placeholder="codigo" name="cod_cliente" value="{!! $customer->cod_cliente !!}">
                                    </div>
                                </div>
                                <!-- Nombre -->
                                <div class="form-group">
                                    <label for="nombre" class="col-sm-2 control-label">Nombre:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre"  value="{!! $customer->nombre !!}">
                                    </div>
                                </div>
                                <!-- Direccion -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Dirección:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="direccion" placeholder="direccion" name="direccion"  value="{!! $customer->direccion !!}">
                                    </div>
                                </div>
                                <!---->
                                <!-- Poblacion -->
                                <div class="form-group">
                                    <label for="poblacion" class="col-sm-2 control-label">Poblacion:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="poblacion" placeholder="poblacion" name="poblacion"  value="{!! $customer->poblacion !!}">
                                    </div>
                                </div>
                                <!---->
                                <!-- Cod Postal -->
                                <div class="form-group">
                                    <label for="cod_postal" class="col-sm-2 control-label">Cod. Postal:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cod_postal" placeholder="cod_postal" name="cod_postal"  value="{!! $customer->cod_postal !!}">
                                    </div>
                                </div>
                                <!---->
                                <!-- Provincia -->
                                <div class="form-group">
                                    <label for="provincia" class="col-sm-2 control-label">Provincia:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="provincia" placeholder="provincia" name="provincia"  value="{!! $customer->provincia !!}">
                                    </div>
                                </div>
                                <!---->
                                <!-- Pais -->
                                <div class="form-group">
                                    <label for="pais" class="col-sm-2 control-label">Pais:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pais" placeholder="pais" name="pais"  value="{!! $customer->pais !!}">
                                    </div>
                                </div>
                                <!---->
                                <!-- Telefono -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Telefono:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono"  value="{!! $customer->telefono !!}">
                                    </div>
                                </div>
                                <!---->
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Email:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" placeholder="email" name="email"  value="{!! $customer->email !!}">
                                    </div>
                                </div>
                                <!---->
                            </div>
                                <!-- Botones-->
                                <div class="card-footer" align="center">
                                    <!--           <button class="btn btn-default">Cancelar</button> -->
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                    <input type="button" onclick="history.back()" class="btn btn-primary" value="Volver">

                                </div>

                        </form>
                    </div>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
