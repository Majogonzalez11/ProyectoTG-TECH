<?php 
class ControladorClientes {

    /* Crear cliente */ 
    static public function ctrCrearCliente() {
        if(isset($_POST["nuevoCliente"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoTelefono"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ #,-]+$/', $_POST["nuevaDireccion"])) {

                $tabla = "clientes";
                $datos = array(
                    "nombre" => $_POST["nuevoCliente"],
                    "telefono" => $_POST["nuevoTelefono"],
                    "direccion" => $_POST["nuevaDireccion"]
                );

                $respuesta = ModeloCliente::mdlIngresarCliente($tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>
                    swal({
                        type: "success",
                        title: "¡Los datos han sido guardados correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "clientes";
                        }
                    });
                    </script>';
                }
            } else {
                echo '<script>
                swal({
                    type: "error",
                    title: "¡Los campos no pueden ir vacios o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                }).then((result)=>{
                    if(result.value){
                        window.location = "clientes";
                    }
                });
                </script>';
            }
        }
    }

    /* Mostrar clientes */
    static public function ctrMostrarClientes($item, $valor){
        $tabla = "clientes";
        $respuesta = ModeloCliente::mdlMostrarClientes($tabla, $item, $valor);
        return $respuesta;
    }

    /* Editar cliente */ 
    static public function ctrEditarCliente() {
        if (isset($_POST["editarCliente"])) {
            $tabla = "clientes";

            $datos = array(
                "id" => $_POST["idCliente"],
                "nombre" => $_POST["editarCliente"],
                "telefono" => $_POST["editarTelefono"],
                "direccion" => $_POST["editarDireccion"]
            );

            $respuesta = ModeloCliente::mdlEditarCliente($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                    swal({
                        type: "success",
                        title: "¡Los cambios han sido efectuados correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if (result.value) {
                            window.location = "clientes";
                        }
                    })
                </script>';
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡Error al efectuar cambios!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    });
                </script>';
            }
        }
    }

    /* Borrar cliente */ 
    static public function ctrBorrarCliente(){
        if(isset($_GET["idCliente"])){
            $tabla = "clientes";
            $datos = $_GET["idCliente"];

            $respuesta = ModeloCliente::mdlBorrarCliente($tabla, $datos);

            if($respuesta == "ok") {
                echo '<script>
                    swal({
                        type: "success",
                        title: "¡El cliente ha sido borrado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if (result.value) {
                            window.location = "clientes";
                        }
                    })
                </script>';
            }
        }
    }
}

?>
   
