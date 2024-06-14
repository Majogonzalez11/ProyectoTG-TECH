<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxUsuiarios {
    /* Editar usuario */
    public $idUsuario;
    public function ajaxEditarUsuario () {
        $item = "id_usuario";
        $valor = $this -> idUsuario;
        
        $respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

        echo json_encode($respuesta);
    }
}

/* Editar usuario */
if(isset($_POST["idUsuario"])){
    $usuarios = new AjaxUsuiarios();
    $usuarios -> idUsuario = $_POST["idUsuario"];
    $usuarios -> ajaxEditarUsuario();
}
?>