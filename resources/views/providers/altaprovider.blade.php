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
                        <h2>Altas Proveedores</h2>
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
                                        <input type="text" class="form-control" id="codigo" placeholder="codigo" name="cod_proveedor">
                                    </div>
                                </div>
                                <!-- Nombre -->
                                <div class="form-group">
                                    <label for="nombre" class="col-sm-2 control-label">Nombre:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
                                    </div>
                                </div>
                                <!-- Direccion -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Dirección:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="direccion" placeholder="direccion" name="direccion">
                                    </div>
                                </div>
                                <!---->
                                <!-- Telefono -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Telefono:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono">
                                    </div>
                                </div>
                                <!---->
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Email:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
                                    </div>
                                </div>
                                <!---->
                                <!-- Web -->
                                <div class="form-group">
                                    <label for="direccion" class="col-sm-2 control-label">Web:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="web" placeholder="web" name="web">
                                    </div>
                                </div>
                                <!---->
                            </div>
                            <!-- Botones-->
                            <div class="card-footer" align="center">
                                <button type="submit" class="btn btn-info">Guardar</button>
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
