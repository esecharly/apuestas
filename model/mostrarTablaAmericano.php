<?php 
    require_once "conexion.php";

    $obj = new Conectar();
    
    $conexion = $obj->conexion();

    /* $fecha = $_POST['fecha']; */

    $sql = "SELECT equipo1, equipo2, fecha, hora FROM t_americano";

    $consulta = $conexion->prepare($sql);                            
    
    $consulta->execute();

    $resultado = $consulta->get_result();

    while($datos = $resultado->fetch_assoc()){
        $cont_dt['data'][]=$datos;
    };
    
    $datosJSON = json_encode($cont_dt, JSON_UNESCAPED_UNICODE);
    
    echo $datosJSON;

    $conexion->close();
?>