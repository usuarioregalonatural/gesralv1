<div class="modal fade" id="create-customer">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h4>Nuevo Cliente</h4>
            </div>
            <div class="modal-body">

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
                                <input type="text" class="form-control" id="codigo" placeholder="codigo" name="cod_cliente">
                            </div>
                        </div>
                        <!---->
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
                        <!-- Poblacion -->
                        <div class="form-group">
                            <label for="poblacion" class="col-sm-2 control-label">Poblacion:</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="poblacion" placeholder="poblacion" name="poblacion">
                            </div>
                        </div>
                        <!---->
                        <!-- Cod Postal -->
                        <div class="form-group">
                            <label for="cod_postal" class="col-sm-2 control-label">Cod. Postal:</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cod_postal" placeholder="codigo postal" name="cod_postal">
                            </div>
                        </div>
                        <!---->
                        <!-- Provincia -->
                        <div class="form-group">
                            <label for="provincia" class="col-sm-2 control-label">Provincia:</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="provincia" placeholder="provincia" name="provincia">
                            </div>
                        </div>
                        <!---->
                        <!-- Pais -->
                        <div class="form-group">
                            <label for="pais" class="col-sm-2 control-label">Pais:</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pais" placeholder="pais" name="pais">
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
                    </div>
                    <!-- Botones-->
                    <div class="card-footer" align="center">
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>

                </form>











            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="XGuardar">
            </div>
        </div>

    </div>

</div>