<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar usuarios
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar Usuarios PRRRR</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarUsuario" style= "background-color: #EAEAEA;">
                Agregar Usuario
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped">
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
            
        <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar usuario</h4>
            </div>
            
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #8B5BA1;">Close</button>
            </div>
        </div>
</div>
</div>
