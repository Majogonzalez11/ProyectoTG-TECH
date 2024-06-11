<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar categorías
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar categorias</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarCategoria" style= "background: #5A3E8A; color:white;">
                Agregar categoría
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>Categoría</th>
                    <th>Acciones</th>  
                </tr>

             </thead>
             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody>
                
             <?php

            $item = null;
            $valor = null;

            $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

            foreach ($categorias as $key => $value) {
                echo ' 
            <tr style="background-color: #EAEAEA;">
                <td>'.($key+1).'</td>
                <td>'.$value["categoria"].'</td>
                <td>
                <div class="btn-group">
                    <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i> </button>
                    <button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i> </button>
                </div>
                </td>
            </tr>';
    }


            ?>

        </tbody>

            </table>
        </div>
    </div>
    </section>
</div>

<!--(bootstrap) modal agregar categoria-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar categoría</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>


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

                    $crearCategoria = new ControladorCategorias();
                    $crearCategoria -> ctrCrearCategoria();

                ?>
                </form>

        </div>
</div>
</div>

<!--(bootstrap) modal editar categoria-->

<div id="modalEditarCategoria" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Editar categoría</h4>
            </div>
            
                <form role="form" method="post">
                <!--CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>
                                <input type="hidden" name="idCategoria" id="idCategoria" required>


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
               
                $editarCategoria = new ControladorCategorias();
                $editarCategoria -> ctrEditarCategoria();
                
                ?>




                </form>

        </div>
</div>
</div>
<?php 

$BorrarCategoria = new ControladorCategorias();
$BorrarCategoria -> ctrBorrarCategoria();

?>