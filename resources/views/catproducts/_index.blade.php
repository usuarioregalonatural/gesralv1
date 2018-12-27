@extends('adminlte::page')
@section('content')

    <div class="container col-md8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Categorias Productos</h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        @if ($catproducts->isEmpty())
                <p>No hay categorias definidas</p>
            @else
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col col-md-offset-2">Codigo Categoria</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($catproducts as $catproduct)
                            <tr>
                                <td class="col col-md-offset-2">{!! $catproduct->cod_categoria !!}</td>
                                <td><a href="{!! action('CatProductsController@show', $catproduct->id) !!}" >{!! $catproduct->des_categoria !!}</a></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
             @endif
      </div>
  </div>

@endsection