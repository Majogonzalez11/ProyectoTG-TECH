<?php 

class ControladorUsuarios {
 /*Ingreso de usuario*/

 static public function ctrIngresoUsuario() {
    if(isset($_POST["ingUsuario"])) {

        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

 // $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); ACA SERIA PARA INGRESAR ENCRIPTADO PERO NO ANDAA
            
            $tabla = "usuario";

            $item = "usuario";
            $valor = $_POST["ingUsuario"];

            $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

          
            if (is_array($respuesta) && $respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"])
            {
                $_SESSION["iniciarSesion"] = "ok";
                $_SESSION["id_usuario"] = $respuesta["id_usuario"];
                $_SESSION["nombre"] = $respuesta["nombre"];
                $_SESSION["usuario"] = $respuesta["usuario"];
                $_SESSION["rol"] = $respuesta["rol"];
               



                echo '<script>
                window.location = "inicio";
                </script>';
                
           }else {

            echo '<br> <div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';


           }    
    
      }
   }

}


 
 /* REGISTRO DE USUARIO */
 public static function ctrCrearUsuario() {
   if (isset($_POST["nuevoUsuario"])) {
       // Depuración de los datos recibidos
       echo '<pre>'; print_r($_POST); echo '</pre>';
       
       if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])) {

           $tabla = "usuario";

           $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

           $datos = array(
               "nombre" => $_POST["nuevoNombre"],
               "usuario" => $_POST["nuevoUsuario"],
               "password" => $encriptar,  //con hash para pruebas
               "rol" => $_POST["nuevoRol"]
           );

           // Depuración de los datos a insertar
           echo '<pre>'; print_r($datos); echo '</pre>';

           $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

           // Depuración de la respuesta
           echo '<pre>'; print_r($respuesta); echo '</pre>';

           if($respuesta == "ok"){

            echo '<script>

            swal({
            
            type: "success",
            title: "¡El usuario ha sido guardado correctamente!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
   
            }).then((result)=>{
            
               if(result.value){
                  
                  window.location = "usuarios";
               
               }
               });
            
            </script>';


         }


            }else{
            echo '<script>

            swal({

            type: "error",
            title: "¡El usuario no se cargo!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false

            }).then((result)=>{

               if(result.value){
                  
                  window.location = "usuarios";
               
               }
               });

            </script>';
            }
 
      }
   }


   /* MOSTRAR USUARIOS */

   static public function ctrMostrarUsuarios($item, $valor){

     
      $tabla = "usuario";
      $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

      return $respuesta;

   }



/* Editar usuario*/ 
static public function ctrEditarUsuario() {
   if (isset($_POST["editarUsuario"])) {
       $tabla = "usuario";

       $datos = array(
           "id_usuario" => $_POST["idUsuario"],
           "nombre" => $_POST["editarUsuario"],
           "password" => $_POST["editarPassword"],
           "rol" => $_POST["editarRol"]
       );

       $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

       if ($respuesta == "ok") {
           echo '<script>
               swal({
                   type: "success",
                   title: "¡Los cambios han sido efectuados correctamente!",
                   showConfirmButton: true,
                   confirmButtonText: "Cerrar"
               }).then((result) => {
                   if (result.value) {
                       window.location = "usuarios";
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
static public function ctrBorrarUsuario(){
   if(isset($_GET["idUsuario"])){
       $tabla = "usuario";
       $datos = $_GET["idUsuario"];

       $respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datos);

       if($respuesta == "ok") {
           echo '<script>
               swal({
                   type: "success",
                   title: "¡El usuario ha sido borrado correctamente!",
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