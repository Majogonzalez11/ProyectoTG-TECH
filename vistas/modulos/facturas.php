<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar facturas
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar facturas</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarCliente" style= "background: #5A3E8A; color:white;">
                Agregar factura
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>ID factura</th>
                    <th>ID venta</th>
                    <th>ID usuario/th>
                    <th>ID cliente</th>
                    <th>Fecha</th>
                    <th>Cantidad vendida</th>
                    <th>Total venta</th>

                </tr>

             </thead>
             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                    <td>1</td>
                    <td>5697</td>
                    <td>9876</td>
                    <td>003</td>
                    <td>256</td>
                    <td>20-05-2024</td>
                    <td>48.000</td>

                    <td>
                     <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                    </div>
                    </td>
                </tr>
             </tbody>
             </thead>

             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                <td>2</td>
                    <td>5698</td>
                    <td>9877</td>
                    <td>003</td>
                    <td>257</td>
                    <td>21-05-2024</td>
                    <td>42.000</td>

                    <td>
                     <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                    </div>
                    </td>
                </tr>
             </tbody>
             </thead>

             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                    <td>3</td>
                    <td>5699</td>
                    <td>9878</td>
                    <td>005</td>
                    <td>267</td>
                    <td>09-06-2024</td>
                    <td>49.000</td>

                    <td>
                     <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                    </div>
                    </td>
                </tr>
             </tbody>


             
                
            </table>
        </div>
    </div>
    </section>
</div>

<!--(bootstrap) modal agregar proveedor-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar proveedor</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre del provedor" required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA EL TELEFONO-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar numero de telefono" data-inputmask="'mask':'(99) 9999-999999'" data-mask required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA LA DIRECCION-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA EL TOTAL DE COMPRAS-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar numero de " required>


                    </div>
                    </div>
                    </div>
                </div>
                    
                <!--PIE DE MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #8B5BA1;">Cerrar</button>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                
                </div>

                </form>


        </div>
</div>
</div>
