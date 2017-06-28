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
      //se llama la conexión 
      include("../models/conexion.php");
      $mysqli=conectar();
      // se realiza la inserción en la base de datos utilizando la vista listadoRaza
      $reg=$mysqli->query("INSERT INTO listadoRaza (nomRaza)
      	                   VALUES ('$_REQUEST[nomRaza]')") or die($mysqli->error);
      //se cierra la conexión a la base de datos
      $mysqli->close();
      header("location:tablaRaza.php");

       ?>
</body>
</html>