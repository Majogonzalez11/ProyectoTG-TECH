<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">

            Administrar Inventario

        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar Inventario</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarProducto" style= "background: #5A3E8A; color:white;">
                Actualizar Inventario
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>ID Producto</th>
                    <th>Descripcion</th>
                    <th>Proveedor</th>
                    <th>Stok</th>
                    <th>Fecha de reposición</th>
                    <th>Acciones</th>  
                </tr>

             </thead>
             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                    <td>1</td>
                    <td>0001</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum</td>
                    <td>70</td>
                    <td>10-06-2024 8:00</td>
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
                    <td>0002</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum</td>
                    <td>20</td>
                    <td>10-06-2024 8:00</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                        </div>
                    </td>
                </tr>
             </tbody>
             <tbody>
             </tbody>

                <tr style="background-color: #EAEAEA;">
                <td>1</td>
                    <td>0003</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum</td>
                    <td>20</td>
                    <td>10-06-2024 8:00</td>
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

<!--(bootstrap) MODAL ACTUALIZAR INVENTARIO-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

        <form role="form" method="post" enctype="multipart/form-data">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Actualizar inventario</h4>
            </div>
            
               <!-- <form role="form" method="post">
                CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                  <!-- ENTRADA PARA SELECCIONAR CATEGORIA-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select class="form-control input lg" name="nuevaCategoria">

                                    <option value="">Seleccionar categoria</option>

                                    <?php

                                    $item = null;

                                    $valor = null;

                                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                                    foreach ($categorias as $key => $value) {

                                        echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                                    }

                                    ?>

                            
                                </select>

                    </div>
                    </div>


                     <!-- ENTRADA PARA SELECCIONAR Producto-->
                     <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select class="form-control input lg" name="nuevaCategoria">

                    <option value="">Seleccionar producto</option>

                                    <option value="Producto1">Producto1</option>

                                    <option value="Producto2">Producto2</option>

                                    <option value="Producto3">Producto3</option>

                                    </select>

                        </div>
                        </div>



                     <!-- ENTRADA PARA LA STOCK-->
                     <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Ingresar cantidad" required>


                    </div>
                    </div>


                    <!-- ENTRADA PARA EL NOMBRE DEL PROVEEDOR-->
                    <div class="fom-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar el nombre del proveedor" required>


                        </div>
                        </div>
                    


                   <!-- CUERPO DE MODAL-->

                    <div class="modal-body">
                        <div class="box-body">

                    
                    
                <!--PIE DE MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #8B5BA1;">Cerrar</button>

                    <button type="submit" class="btn btn-primary">Actualizar inventario</button>
                
                </div>

                </form>


        </div>
</div>
</div>
