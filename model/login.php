<?php 
    require_once "conexion.php";

    session_start();

    $obj = new Conectar();
    
    $conexion = $obj->conexion();

    $datosUsuario = array(
        $_POST['nombreLogin'],
        $_POST['passwordLogin']
    );
    
    $sql = "SELECT nombre_usuario FROM t_usuarios WHERE nombre_usuario = ? AND password_usuario = ?";

    $consulta = $conexion->prepare($sql);                            
    $consulta->bind_param(
        'ss',
        $datosUsuario[0],
        $datosUsuario[1],
    );    
    $consulta->execute();

    $consulta->bind_result($resultado);
    $consulta->fetch();

    $_SESSION['user'] = $resultado;

    if($_SESSION['user'] == ""){
        echo "2";
    } else {
        echo "3";
    }

    echo $_SESSION['user'];

    $conexion->close();

    if($_POST['funcion'] == 1){
        session_unset();
        session_destroy();
    } 

    
?>