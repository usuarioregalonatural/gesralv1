@extends('adminlte::page')
@section('content')
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12 col-md-offset-0 ">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <b>LISTADO DE SUBCATEGORIAS PRODUCTOS</b>
                        <a href="{{route('subcatealta')}}" class="btn btn-sm btn-primary pull-right">
                            NUEVO
                        </a>
                    </div>
                    <div class="table-responsive">
                        <tr>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <td>Busqueda: </td>
                                        {{ Form::open(['route'=> 'subcatproducts', 'method'=>'GET']) }}
                                        <td>{{Form::text ('des_subcategoria',null, ['class'=>'form-control', 'placeholder'=>'descripción'])}}</td>
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
                                <th>Categoria</th>
                                <th>Cod. Subcategoria</th>
                                <th>Descripción</th>
                            </tr>
                            </thead>
                            <tbody class="container-fluid">
                            @foreach($subcatproducts as $subcatproduct)
                                <tr>
                                    <td style="cursor:pointer">
                                        <a href="{{route('subcateshow', $subcatproduct->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                    </td>
                                    <td style="cursor:pointer"></td>
                                    <td style="cursor:pointer">{!! $subcatproduct->cod_subcategoria !!}</td>
                                    <td style="cursor:pointer">{!! $subcatproduct->des_subcategoria !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $subcatproducts->render() !!}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection