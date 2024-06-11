<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">

            Administrar productos

        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar productos</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
            <button class="btn btn primary" data-toggle="modal" data-target="#modalAgregarProducto" style= "background: #5A3E8A; color:white;">
                Agregar producto
            </button>
        </div>


        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <td>Imagen</td>
                    <th>Producto</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Agregado</th>
                    <th>Acciones</th>  
                </tr>

             </thead>
             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                    <td>1</td>
                    <td><img src="vistas/img/productos/teclado.png"class="
                    img-tumbnail" width="40px"></td> 
                    <td>TECLADO + MOUSE</td>
                    <td>0001</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum</td>
                    <td>20</td>
                    <td>$3.000</td>
                    <td>$6.000</td>
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
                    <td>1</td>
                    <td><img src="vistas/img/productos/jblc5.png"class="
                    img-tumbnail" width="40px"></td> 
                    <td>JBL CHARGE 5</td>
                    <td>0002</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum</td>
                    <td>20</td>
                    <td>$150.000</td>
                    <td>$300.000</td>
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
                     <td><img src="vistas/img/productos/airpods.png"class="
                    img-tumbnail" width="40px"></td> 
                    <td>AIR PODS XIAOMI</td>
                    <td>0003</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum</td>
                    <td>20</td>
                    <td>$10.000</td>
                    <td>$19.000</td>
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

<!--(bootstrap) MODAL AGREGAR PRODUCTO-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
    <div class="modal-dialog" style="background-color: #EAEAEA;" >
        <div class="modal-content" style="background-color: #EAEAEA;">

        <form role="form" method="post" enctype="multipart/form-data">

             <!--CABEZA DE MODAL-->
            
        <div class="modal-header" style="background:#5A3E8A; color:white" >
                <button type="button" class="close" data-dismiss="modal" style="color:#EAEAEA;">&times;</button>
                <h4 class="modal-title">Agregar producto</h4>
            </div>
            
               <!-- <form role="form" method="post">
                CUERPO DE MODAL-->

                <div class="modal-body">
                    <div class="box-body">

                <!-- ENTRADA PARA EL NOMBRE DEL PRODUCTO-->
                        <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar el nombre del producto" required>


                    </div>
                    </div>

                <!-- ENTRADA PARA EL CODIGO-->
                <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>


                    </div>
                    </div>

                <!-- ENTRADA PARA LA DESCRIPCION-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>


                    </div>
                    </div>


                    <!-- ENTRADA PARA SELECCIONAR CATEGORIA-->
                    <div class="fom-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select class="form-control input lg" name="nuevaCategoria">

                                    <option value="">Seleccionar categoria</option>

                                    <option value="Perifericos">Perifericos</option>

                                    <option value="Parlantes">Parlantes</option>

                                    <option value="Gamer">Gamer</option>

                                    <option value="SmartWachs">SmartWachs</option>

                            
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

                     <!-- ENTRADA PARA PRECIO COMPRA-->
                     <div class="fom-group row">
                        <div class="col-xs-6">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>


                    </div>
                    </div>
                  

                     <!-- ENTRADA PARA PRECIO VENTA-->
                                <div class="col-xs-6">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>


                    </div>
                         <br>
                         <!--CHECKBOX PARA PORCENTAJE-->

                         <div class="col-xs-6">

                         <div class="form-group">
                            <label> 
                            <input type="checkbox" class="minimal porcentaje" checked>
                            Utilizar porcentaje
                            </label>

                         </div>

                    </div>

                

                    <!--ENTRADA PARA PORCENTAJE-->
                         
                    <div class="col-xs-6" style="padding:0">
                        <div class="input-group">
                            <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                            <span class="imput-group-addon"><i class="" ></i></span> 

                        </div>
                    </div>

                     </div>

                     </div>
                                     

                     <!-- ENTRADA PARA SUBIR IMAGEN-->
                     <div class="fom-group">
                            <div class="panel">Subir imagen</div>
                            <input type="file" id="nuevaImagen" name="nuevaImagen">
                            <p class="help-block">Peso máximo de la imagen 2MB</p>
                            <img src="vistas/img/productos/logoTGT.jpg"class="img-thumbnail" width="80px">

                    </div>
                    </div>
                    </div>

                    

                </div>
                    
                <!--PIE DE MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #8B5BA1;">Cerrar</button>

                    <button type="submit" class="btn btn-primary">Guardar producto</button>
                
                </div>

                </form>


        </div>
</div>
</div>
