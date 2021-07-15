$(document).ready( ()=> {
    var edad, fechaNac;
    var fechaAct = new Date();
    fechaAct = parseInt(fechaAct.getFullYear());

    function validarVacios(){ 
        if($('#nombreUsuario').val() == "" && $('#passwordUsuario').val() == "" && $('#correoUsuario').val() == "" && $('#nombrePersonal').val() == "" && $('#apellidoPaterno').val() == "" && $('#apellidoMaterno').val() == "" && $('#fechaNacimiento').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar todos los campos vacios",
                icon: "warning"
            });
            return false;
        } else if($('#nombreUsuario').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar el nombre de usuario vacio",
                icon: "warning"
            });
            return false;
        } else if($('#passwordUsuario').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar la contraseña vacia",
                icon: "warning"
            });
            return false;
        } else if($('#correoUsuario').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar el correo vacio",
                icon: "warning"
            });
            return false;
        } else if($('#nombrePersonal').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar el nombre vacio",
                icon: "warning"
            });
            return false;
        } else if($('#apellidoPaterno').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar el apellido paterno vacio",
                icon: "warning"
            });
            return false;
        } else if($('#apellidoMaterno').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar el apellido materno vacio",
                icon: "warning"
            });
            return false;
        } else if($('#fechaNacimiento').val() == ""){
            Swal.fire({
                title: "Ups...",
                text: "No puedes dejar la fecha de nacimiento vacia",
                icon: "warning"
            });
            return false;
        } else {
            validarFecha();
        }
    };

    function validarFecha(){
        fechaNac = parseInt($('#fechaNacimiento').val().substring(0,4));
        edad = fechaAct - fechaNac;
        console.log(edad);
        if(edad < 18){
            Swal.fire({
                title: "Ups...",
                text: "Recuerda que debes ser mayor de 18 años para poder registrarte en este sitio",
                icon: "warning"
            });
            $('#fechaNacimiento').val("");
            return false;
        } else {
            registrarUsuario();
        }
    };

    function registrarUsuario(){
        console.log("entrando en la funcion");
        $.ajax({
            type: "POST",
            data: $('#frmRegistrar').serialize(),
            url: "./model/registrarUsuario.php",
            success: (r)=>{
                console.log(r);
                if(r == 1){
                    Swal.fire({
                        title: "Bien!",
                        text: "Tu cuenta se ha creado con exito",
                        icon: "success",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 3000
                    });
                    $('#frmRegistrar')[0].reset();
                } else {
                    Swal.fire({
                        title: "Ups...",
                        text: "Algo ha salido mal al crear tu cuenta",
                        icon: "error"
                    });
                    return false;
                }
            }
        });
        
    };

    $('#btnRegistrar').click(()=>{
        validarVacios();
    });
});