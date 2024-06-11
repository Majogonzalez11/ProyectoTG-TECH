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
        succes:function(respuesta){
            console.log("respuesta", respuesta); 
            
            var nuevoCodigo = Number(respuesta["codigo"]) + 1;
            $("#nuevoCodigo").value(nuevoCodigo);

        }
    })

})
