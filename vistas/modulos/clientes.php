<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar clientes
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar clientes</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarCliente" style= "background: #5A3E8A; color:white;">
                Agregar cliente
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Id_venta</th>
                    <th>Acciones</th>  
                </tr>

             </thead>
    

             <tbody>
                
             <?php

            $item = null;
            $valor = null;

            $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

            foreach ($clientes as $key => $value) {
                echo ' 
                <tr style="background-color: #EAEAEA;">
                <td>'.($key+1).'</td>
                <td>'.$value["nombre"].'</td>
                <td>'.$value["telefono"].'</td>
                <td>'.$value["direccion"].'</td>
                <td>'.$value["id_venta"].'</td>

                <td>
                 <div class="btn-group">
                        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'" ><i class="fa fa-pencil"></i> </button>
                        <button class="btn btn-danger btnEliminarCliente" btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i> </button>
                </div>
                </td>
                </tr>

                ';
    }


            ?>

        </tbody>

            </table>
        </div>
    </div>
    </section>
</div>

<!-- modal agregar cliente-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar cliente</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Agregar cliente" required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA EL TELEFONO-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar numero de telefono" required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA LA DIRECCION-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>


                    </div>
                    </div>
                    </div>
                </div>
                    
                <!--PIE DE MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #8B5BA1;">Cerrar</button>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                
                </div>

                <?php 

                    $crearCliente = new ControladorClientes();
                    $crearCliente -> ctrCrearCliente();

                ?>
                </form>

        </div>
</div>
</div>

<!--(bootstrap) modal editar cliente-->

<div id="modalEditarCliente" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Editar cliente</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>
                                <input type="hidden" name="idCliente" id="idCliente" required>


                    </div>
                    </div>
                     <!-- ENTRADA PARA EL TELEFONO-->
                     <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA LA DIRECCION-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" required>


                    </div>
                    </div>
                    </div>
                </div>
                    
                <!--PIE DE MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #8B5BA1;">Cerrar</button>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                
                </div>

    
                <?php
               
                $editarCliente = new ControladorClientes();
                $editarCliente -> ctrEditarCliente();
                
                ?>




                </form>

        </div>
</div>
</div>
<?php 

$BorrarCliente = new ControladorClientes();
$BorrarCliente -> ctrBorrarCliente();

?>

