<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar usuarios 
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar usuarios </li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarCliente" style= "background: #5A3E8A; color:white;">
                Agregar usuarios
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>  
                </tr>

             </thead>
    

             <tbody>
                
             <?php

            $item = null;
            $valor = null;

            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

            foreach ($usuarios as $key => $value) {
                echo ' 
                <tr style="background-color: #EAEAEA;">
                <td>'.($key+1).'</td>
                <td>'.$value["nombre"].'</td>
                <td>'.$value["usuario"].'</td>
                <td>'.$value["rol"].'</td>
                <td>'.$value["password"].'</td>

                <td>
                 <div class="btn-group">
                        <button class="btn btn-warning btnEditarUsuario" data-toggle="modal" data-target="#modalEditarUsuario" idUsuario="'.$value["id_usuario"].'" ><i class="fa fa-pencil"></i> </button>
                        <button class="btn btn-danger btnEliminarUsuario" btnEliminarUsuario" idUsuario="'.$value["id_usuario"].'"><i class="fa fa-times"></i> </button>
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

<!-- modal agregar Usuario-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar usuario</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>


                    </div>
                    </div>
                    <!-- ENTRADA PARA EL USUARIO-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>
                     </div>
                    </div>

                    <!-- ENTRADA PARA LA CONTRASEÑA-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
                     </div>
                    </div>


                    <!-- ENTRADA PARA SELECCIONAR SU ROL-->
                    <div class="fom-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input lg" name="nuevorRol">

                                    <option value="">Seleccionar rol</option>

                                    <option value="Administrador">Administrador</option>

                                    <option value="Vendedor">Vendedor</option>

                                    <option value="Empleado Especial">Empleado especial</option>

                            
                                </select>


                        </div>
                    </div>
                   
                    </>
                    
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

<div id="modalEditarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Editar usuario</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="editarNombre" value="" id="editarNombre" required>
                                <input type="hidden" name="idNombre" id="idNombre" required>


                    </div>
                    </div>
                     <!-- ENTRADA PARA EL USUARIO-->
                     <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" name="editarUsuario" value="" id="editarUsuario" required>
                                


                    </div>
                    </div>


    
                    <!-- ENTRADA PARA SELECCIONAR SU ROL-->
                    <div class="fom-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input lg" name="editarRol">

                                    <option value="" id=""></option>

                                    <option value="Administrador">Administrador</option>

                                    <option value="Vendedor">Vendedor</option>

                                    <option value="Empleado Especial">Empleado especial</option>

                            
                                </select>


                        </div>
                    </div>


                    <!-- ENTRADA PARA LA CONTRASEÑA-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-lock"></i></span>
                                <input type="text" class="form-control input-lg" name="editarPassword id="editarPassword" placeholder="Ingrese una nueva contraseña" required>


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

