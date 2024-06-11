<?php
require_once "../controladores/productos.controlador.php";
require_once "../controladores/productos.modelo.php";

class AjaxProductos{

    /*=========================================
    GENERAR CODIGO A PARTIR DE ID CATEGORIA
    ==========================================*/
    public $idCategoria;
    public function ajaxCrearCodigoProducto(){
        
        $item = "idCategoria";
        $valor = $this->idCategoria;
        $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

        echo json_encode($respuesta);

    }

}

/*=========================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CODIGO
==========================================*/
if(isset($_POST["idCategoria"])){

    $codigoProducto = new AjaxProductos();
    $codigoProducto -> idCategoria = $_POST["idCategoria"];
    $codigoProducto -> ajaxCrearCodigoProducto();

}