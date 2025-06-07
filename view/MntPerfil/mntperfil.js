var usu_id = $("#USU_IDx").val();

$(document).on("click", "#btnguardar", function() {
    var pass = $("#txtpass").val();
    var newpass = $("#txtpassconfirm").val();

    if (pass.length == 0 || newpass.length == 0) {
        swal.fire({
            title: "Error",
            text: "Los campos de contraseña no pueden estar vacíos.",
            icon: "error"
        });
        return;
    }

    if (pass === newpass) {
        $.post("../../controller/usuario.php?op=actualizar", {
            usu_id: usu_id,
            usu_pass: pass
        }, function(data) {
            swal.fire({
                title: "Correcto",
                text: "Actualizado correctamente.",
                icon: "success"  // ✅ corregido el typo
            });
        });
    } else {
        swal.fire({
            title: "Error",
            text: "Las contraseñas no coinciden.",
            icon: "error"
        });
    }
});

