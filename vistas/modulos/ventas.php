<div class="content-wrapper" style="background-color: #EAEAEA;">

    <section class="content header" style="background-color: #5A3E8A;">
        <h1 style="color: white;">
            Administrar ventas
        </h1>
        <ol class="breadcrumb" style="background-color: #7D2BA2;">
            <li><a href="inicio" style="color: white;"> <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active" style="color: white;">Administrar ventas</li>
        </ol>
    </section> 


<section class="content">
    
    <div class="box" style="background-color:#EAEAEA;">
        <div class="box-header with-border" style="background-color:#EAEAEA;">
        
        <a href="crear-venta">
        <button class="btn btn primary" style= "background: #5A3E8A; color:white;">
                Agregar venta
            </button>
        </div>
        </a>

        <div class="box-body" >
            <table class="table table-bordered table-striped dt-responsive tablas">
              <thead>
                <tr>
                    <th style="width:10px">#</th>
                    <th>Codigo de factura</th>
                    <th>Cliente</th>
                    <th>Vendedor</th>
                    <th>ID_producto</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Acciones</th>

                </tr>

             </thead>
             <!--Maquetacion de la tabla de usuarios realizada con bootstrap --> 
             <tbody > 
                <tr style="background-color: #EAEAEA;">
                    <td>1</td>
                    <td>1001</td>
                    <td>Juana Gomez</td>
                    <td>Martin Leal</td>
                    <td>10</td>
                    <td>$25.000</td>
                    <td>17/05/2024</td>
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

