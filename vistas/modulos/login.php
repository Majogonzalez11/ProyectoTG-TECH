
<div class="login-box">
    <div class="login-logo">
    <img src="vistas/img/plantillas/login2.png" class="img-responsive" style="padding: 5px; width: 450px; height: 110px; margin-top: -10px; border-radius: 15px;">

    </div>

    <!-- /.login-logo -->
    <div class="login-box-body" style="width: 400px; margin-top: 10px; border-radius: 15px; background: #fff; background-color: CadetBlue; padding: 40px; box-sizing: border-box; text-align: center;">
        <p class="login-box-msg" style="font-size: 24px; margin-bottom: 20px; margin-top: -10px; color: black;">Ingresar al sistema</p>

        <form method="post">

            <div class="form-group has-feedback">
                
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" requiered>   
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            
        </div>
            
        <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" requiered>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

             <!-- /.col -->
                <div class="col-xs-5">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="position: relative; display: inline-block; padding: 5px 5px; background-color: #333; color: #fff; border-radius: 4px;">Ingresar</button>
                </div>
    
            </div>

            <?php 

            $login = new ControladorUsuarios();
            $login -> ctrIngresoUsuario();


            ?>

        </form>

    </div>
    
</div>
