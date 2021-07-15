$(document).ready( ()=>{
    function iniciarSesion(){
        $.ajax({
            type: "POST",
            data: $('#frmLogin').serialize(),
            url: "./model/login.php",
            success: (r)=> {
                console.log(r);
                if(r != "2"){
                    Swal.fire({
                        title: "Iniciando sesión...",
                        text: "Espera por favor",
                        icon: "success",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 3000
                    }).then((value) => {
                        window.location = "inicio";
                    });
                } else {
                    Swal.fire({
                        title: "Ups..",
                        text: "Hubo un error al iniciar sesión, comprueba tus datos de acceso",
                        icon: "error",
                    });
                    return false;
                }
            }
        });
    };

    function validarVacios(){
        if($('#nombreLogin').val() == "" && $('#passwordLogin').val() == ""){
            Swal.fire({
                title: "Ups..",
                text: "No puedes dejar todos los campos vacios",
                icon: "warning",
            });
            return false;
        } else if($('#nombreLogin').val() == ""){
            Swal.fire({
                title: "Ups..",
                text: "No puedes dejar el nombre de usuario vacio",
                icon: "warning",
            });
            return false;
        } else if($('#passwordLogin').val() == ""){
            Swal.fire({
                title: "Ups..",
                text: "No puedes dejar la contraseña vacia",
                icon: "warning",
            });
            return false;
        } else {
            iniciarSesion();
        }
    }

    $('#btnLogin').click(()=>{
        validarVacios();
    });
});