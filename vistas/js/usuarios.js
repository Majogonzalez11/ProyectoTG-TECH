/* EDITAR USUARIOS */
$(document).on("click", ".btnEditarUsuario", function() {
    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);
    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false, 
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPassword").val(respuesta["password"]);
            $("#editarRol").html(respuesta["rol"]);
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

