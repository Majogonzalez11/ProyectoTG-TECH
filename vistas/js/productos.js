/*=========================================
CARGAR LA TABLA DINAMICA DE PRODUCTOS
==========================================
$.ajax({

    url: "ajax/datatable-productos.ajax.php",
    success:function(respuesta){

      console.log("respuesta", respuesta);  
    }

})

new DataTable('#tablaProductos', {
    ajax: 'ajax/datatable-productos.ajax.php'
});

*/
/*=========================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CODIGO
==========================================*/
$("#nuevaCategoria").change(function(){

    var idCategoria = $(this).val();
    
    var datos = new FormData();
    datos.append("idCategoria", idCategoria);

    $.ajax({

        url:"ajax/productos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success:function(respuesta){
            console.log("respuesta", respuesta); 

            if(!respuesta){

                var nuevoCodigo = idCategoria+"01";
                $("#nuevoCodigo").val(nuevoCodigo);
            
            }else{

                var nuevoCodigo = Number(respuesta["codigo"]) + 1;
                $("#nuevoCodigo").val(nuevoCodigo);

            }
            
        }
    })

})

/*=========================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CODIGO
==========================================*/