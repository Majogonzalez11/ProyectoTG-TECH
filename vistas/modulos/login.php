<!-- Este div contiene toda la estructura de la caja de inicio de sesión.
    Dentro de él, hay dos secciones: el logo y el cuerpo del formulario de inicio de sesión.-->

<div class="login-box" style="background-color: #BB7BD8;">
    <div class="login-logo">
    <img src="vistas/img/plantillas/login2.png" class="img-responsive" style="padding: 5px; width: 450px; height: 110px; margin-top: -10px; border-radius: 15px; transform: translateX(4%);">
    </div>

<!--Esta sección contiene el formulario de inicio de sesión.-->
<div class="login-box-body" style="width: 400px; margin-top: 10px; border-radius: 15px; background: #8B5BA1; background-color: #8B5BA1; padding: 40px; box-sizing: border-box; text-align: center;">
    <p class="login-box-msg" style="font-size: 24px; margin-bottom: 20px; margin-top: -10px; color: black;">Ingresar al sistema</p>

<!--Formulario con el metodo post para enviar los datos. Tiene dos campos de entrada: uno para el usuario y el otro
para la contraseña  -->
    <form method="post">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" requiered>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" requiered>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

<!-- Boton de enviar-->
        <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat" style="position: relative; display: inline-block; padding: 5px 5px; background-color: #333; color: #fff; border-radius: 4px;">Ingresar</button>
        </div>

</div>

<!--Se crea una instancia de ControladorUsuarios y se llama al método ctrIngresoUsuario().
Este método es el encargado de manejar la lógica de autenticación.Verificará los datos ingresados y
permitirá o denegará el acceso al sistema. -->
<?php

$login = new ControladorUsuarios();
$login->ctrIngresoUsuario();

?>

</form>
</div>
</div>
