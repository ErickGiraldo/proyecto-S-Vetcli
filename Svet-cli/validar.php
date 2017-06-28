<?php
    include '../models/conexion.php';
    $mysqli=conectar();
    $nick = $_POST["usuario"];

    $consulta = "select usuario from usuario where usuario = '".$nick"'";
    $result = $conexion->query($consulta);
    $fila= mysqli_num_rows($result);
    if( $fila== 0)
        echo 1;
    else
        echo 0;
?>