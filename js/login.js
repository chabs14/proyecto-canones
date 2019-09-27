$(document).ready(function () {
    $("#btn-login").click(function () {
        let obj = {
            "accion": "login"
        };
        $("form").find("input").map(function (i, e) {
            obj[$(this).prop("name")] = $(this).val();
            if ($(this).prop("type") == "checkbox") {
                obj[$(this).prop("name")] = $(this).prop("checked");
            };
        });
        //console.log(obj);
        $.post("includes/funciones.php", obj, function (r) {
            if (r.status == 1) {
                window.location.href = "index.php";
            }
            if (r.status == 0) {
                $("#error").html("Usuario o contraseña incorrectos").fadeIn();
            }

        }, "JSON");
    });
});
//si el status es 0 enviar mensaje de datos incorrectos, intente de nuevo
//si el status es 1 redireccionar a index