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
                        <h2>Altas Subcategorias Productos</h2>
                    </div>
                    <div class="table-responsive">

<!--                        <form class="form form-group-sm" method="POST">  -->
                        <form class="form form-group" method="POST">
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="card-body">

                                <!-- Categoria -->
                                <div class="form-group">
                                    {{ Form::label('categoria_id','Categoria') }}
                                    {{ Form::select('categoria_id',$categorias,null,['class'=>'form-control'])}}
                                </div>
                                <!---->
                                <!-- Codigo -->
                                <div class="form-group">
                                    <label for="cod_subcategoria" class="col-sm-2 control-label">Cod. Subcategoria:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cod_subcategoria" placeholder="codigo subcategoria" name="cod_subcategoria">
                                    </div>
                                </div>
                              <!---->
                                <!-- Descripcion -->
                                <div class="form-group">
                                    <label for="des_subcategoria" class="col-sm-2 control-label">Descripción:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="des_subcategoria" placeholder="descripción" name="des_subcategoria">
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
