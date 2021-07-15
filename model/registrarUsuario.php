<?php 
    require_once "conexion.php";

    $obj = new Conectar();
    
    $conexion = $obj->conexion();

    $datosUsuario = array(
        $_POST['nombreUsuario'],
        $_POST['passwordUsuario'],
        $_POST['correoUsuario'],
        $_POST['nombrePersonal'],
        $_POST['apellidoPaterno'],
        $_POST['apellidoMaterno'],
        $_POST['fechaNacimiento']
    );

    $sql = "INSERT INTO t_usuarios (nombre_usuario,password_usuario,email,nombre_personal,apellido_paterno,apellido_materno,fecha_nacimiento) 
                        VALUES (?, ? , ?, ?, ?, ?, ?)";

    $insercion = $conexion->prepare($sql);                            
    $insercion->bind_param(
        'sssssss',
        $datosUsuario[0],
        $datosUsuario[1],
        $datosUsuario[2],
        $datosUsuario[3],
        $datosUsuario[4],
        $datosUsuario[5],
        $datosUsuario[6],
    );    
    
    $resultado = $insercion->execute();

    echo $resultado;

    $conexion->close();
?>