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

       $mysqli->query("Update listadoEspecie set nomEspecie ='$_REQUEST[nomEspecie]'
       	               where idEspecie='$_REQUEST[idEspecie]'") or die($mysqli->error);

       $mysqli->close();
       header("location:tablaEspecie.php");
      ?>
</body>
</html>