/* EDITAR CATEGORIA */
$(document).on("click", ".btnEditarCategoria", function() {
    var idCategoria = $(this).attr("idCategoria");

    var datos = new FormData();
    datos.append("idCategoria", idCategoria);
    $.ajax({
        url: "ajax/categorias.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false, 
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#editarCategoria").val(respuesta["categoria"]);
            $("#idCategoria").val(respuesta["id"]);
        },
        error: function(xhr, status, error) {
            console.error("Error en la llamada AJAX:", error);
        }
    });
});

/* ELIMINAR CATEGORIA */

$(document).on("click", ".btnEliminarCategoria", function() {
    var idCategoria = $(this).attr("idCategoria");

    swal({
        title: '¿Estas seguro de borrar la categoría?',
        text: "Si no lo está, puede cancelar la accion.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar categoría'
    }) .then ((result)=>{
        if(result.value){
            window.location = "index.php?ruta=categorias&idCategoria="+idCategoria;
        }
    })
    
    });

