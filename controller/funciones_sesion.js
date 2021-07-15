$(document).ready(() => {

    function cerrarSesion(accion) {
        $.ajax({
            type: 'POST',
            data: 'funcion=' + accion,
            url: './model/login.php',
            success: (r) => {
                console.log(r);
                Swal.fire({
                    title: "Cerrando sesión...",
                    text: "Espera por favor",
                    icon: "info",
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    timer: 3000
                }).then((value) => {
                    window.location = "inicio";
                });
                
            }
        });
    }

    $('#btnCerrarSesion').click(() => {
        cerrarSesion(1);
    });
});