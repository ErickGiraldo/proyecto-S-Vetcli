<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioAuxiliar.php');
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Veterinaria</title>
	<meta charset="utf-8">
</head>
<body>
     <?php 
       include("../models/conexion.php");
       $mysqli=conectar();

       $mysqli->query("Update listadoRaza set nomRaza ='$_REQUEST[nomRaza]'
       	               where idRaza='$_REQUEST[idRaza]'") or die($mysqli->error);

       $mysqli->close();
       header("location:tablaRaza.php");
      ?>
</body>
</html>