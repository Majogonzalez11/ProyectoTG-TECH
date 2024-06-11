/* EDITAR clientes */
$(document).on("click", ".btnEditarCliente", function() {
    var idCliente = $(this).attr("idCliente");

    var datos = new FormData();
    datos.append("idCliente", idCliente);
    $.ajax({
        url: "ajax/clientes.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false, 
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#idCliente").val(respuesta["id"]);
            $("#editarCliente").val(respuesta["nombre"]);
            $("#editarTelefono").val(respuesta["telefono"]);
            $("#editarDireccion").val(respuesta["direccion"]);
        },
        error: function(xhr, status, error) {
            console.error("Error en la llamada AJAX:", error);
        }
    });
});

/* ELIMINAR clientes */

$(document).on("click", ".btnEliminarCliente", function() {
    var idCliente = $(this).attr("idCliente");

    swal({
        title: '¿Estás seguro de borrar los datos?',
        text: "Si no lo está, puede cancelar la acción.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Sí, borrar cliente'
    }).then((result) => {
        if (result.value) {
            window.location = "index.php?ruta=clientes&idCliente=" + idCliente;
        }
    });
});


            