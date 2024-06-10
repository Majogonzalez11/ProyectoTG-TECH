<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar usuarios
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar Usuarios</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarUsuario" style= "background: #5A3E8A; color:white;">
                Agregar Usuario
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Acciones</th>  
                </tr>

             </thead>
             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                    <td>1</td>
                    <td>Usuario Administrador</td>
                    <td>admin</td>
                    <td>admin123</td>
                    <td>administrador</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                        </div>
                    </td>
                </tr>
             </tbody>
             <tbody>
                <tr style="background-color: #EAEAEA;">
                    <td>2</td>
                    <td>Usuario Vendedor</td>
                    <td>admin2</td>
                    <td>admin456</td>
                    <td>vendedor</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-pencil" ></i> </button>
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

<!--(bootstrap) modal agregar usuario-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar usuario</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

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


                    <!-- ENTRADA PARA EL CONTRASEÑA-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>


                    </div>
                    </div>


                    <!-- ENTRADA PARA SELECCIONAR SU PERFIL-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input lg" name="nuevoPerfil">

                                    <option value="">Seleccionar perfil</option>

                                    <option value="Administrador">Administrador</option>

                                    <option value="Vendedor">Vendedor</option>

                                    <option value="Empleado Especial">Empleado especial</option>

                            
                                </select>


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
