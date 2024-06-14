<div class="content-wrapper" style="background-color: #9E63B8; padding: 20px 10px;">
    <section class="content header" style="margin-top: -20px;">
        <h1 style="color: white;">Crear venta</h1>
    </section>

    <section class="content">
        <div class="row">

            <!-- El formulario -->
            <div class="col-lg-5 col-lg-offset-3" style="margin: 0 auto; margin-top: -150px;">
                <div class="box box-success" style="height: auto; overflow: hidden;">
                    <div class="box-header with-border"></div>
                    <form role="form" method="post" style="margin-top: 0;">
                        <div class="box-body" style="height: auto; overflow: visible;">
                           
                            <!-- Entrada del vendedor -->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>
                                </div>
                            </div>
                           
                            <!-- Entrada de la venta -->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="1001" readonly>
                                </div>
                            </div>

                            <!-- Entrada del cliente -->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                                        <option value="">Seleccionar cliente</option>
                                    </select>
                                    <span class="input-group-addon">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button>
                                    </span>
                                </div>
                            </div>
                    
                            <!-- Entrada para agregar producto -->
                            <div class="form-group row nuevoProducto">
                                <div class="col-xs-6" style="padding-right: 0;">
                                    <div class="input-group">
                                        <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>
                                        <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripcion del producto" required>
                                    </div>
                                </div>
                    
                                <!-- Precio producto -->
                                <div class="col-xs-3">
                                    <input type="number" class="form-control" id="nuevaCantidadProducto" min="1" placeholder="0" required>
                                </div>
                                <div class="col-xs-3" style="padding-left: 0;">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                        <input type="number" min="1" class="form-control" id="nuevoPrecioProducto" name="nuevoPrecioProducto" placeholder="0000" readonly required>
                                    </div>
                                </div>
                            </div>

                            <!-- Boton para agregar producto -->
                            <button type="button" class="btn btn-default hidden-lg">Agregar productos</button>
                            <hr>
                            <div class="row">
                                <!-- Entrada impuestos -->
                                <div class="col-xs-8 pull-right">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Impuestos</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                                        <input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>
                                                    </div>
                                                </td>
                                                <td style="width: 50%">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                                        <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="0000" readonly required>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr>
                    
                            <!-- Entrada método de pago -->
                            <div class="form-group row">
                                <div class="col-xs-6" style="padding-left: 15px;">
                                    <div class="input-group">
                                        <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                                            <option value="">Seleccione método de pago</option>
                                            <option value="efectivo">Efectivo</option>
                                            <option value="tarjetaCredito">Tarjeta Crédito</option>
                                            <option value="tarjetaDebito">Tarjeta Débito</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6" style="padding-left: 0;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código transaccion" required>
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>
                        </div>
                    </form>
                </div>
            </div>

            <!--Tabla de productos -->
            <div class="col-lg-7 hidden-md hidden-sm hidden-xs col-lg-offset-3 col-xs-12" style="margin: 0 auto; margin-top: -150px;">
                <div class="box box-warning">
                    <div class="box-header with-border"></div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped dt-responsive tablas">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th>Imagen</th>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td><img src="vistas/img/productos/prod.jpg" class="img-thumbnail" width="40px"></td>
                                    <td>00123</td>
                                    <td>Lorem ipsum</td>
                                    <td>20</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                
                
                </div>
            </div>



        </div>
    </section>
</div>