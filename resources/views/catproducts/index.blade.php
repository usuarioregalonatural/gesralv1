@extends('adminlte::page')
@section('content')
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12 col-md-offset-0 ">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <b>LISTADO DE CATEGORIAS PRODUCTOS</b>
                        <a href="{{route('catealta')}}" class="btn btn-sm btn-primary pull-right">
                            NUEVO
                        </a>
                    </div>
                    <div class="table-responsive">
                        <tr>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <td>Busqueda: </td>
                                        {{ Form::open(['route'=> 'catproducts', 'method'=>'GET']) }}
                                        <td>{{Form::text ('des_categoria',null, ['class'=>'form-control', 'placeholder'=>'descripción'])}}</td>
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
                                <th>Cod. Categoria</th>
                                <th>Descripción</th>
                            </tr>
                            </thead>
                            <tbody class="container-fluid">
                            @foreach($catproducts as $catproduct)
                                <tr>
                                    <td style="cursor:pointer">
                                        <a href="{{route('cateshow', $catproduct->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                    </td>
                                    <td style="cursor:pointer">{!! $catproduct->cod_categoria !!}</td>
                                    <td style="cursor:pointer">{!! $catproduct->des_categoria !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $catproducts->render() !!}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection