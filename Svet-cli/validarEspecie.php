<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioAuxiliar.php');
}
 ?><!DOCTYPE html>
<html>
<head>
	<title>Veterinaria</title>
	<meta charset="utf-8">
</head>
<body>
     <?php 
      //Se llama la conexión en la base de datos
      include("../models/conexion.php");
      $mysqli=conectar();
// se inserta la nueva especie en la base de datos utilizando la vista listaEspecie
 $sql=$mysqli->query("insert into especie (nomEspecie) values('$_REQUEST[nomEspecie]')");
      $mysqli->close();
      header('Location:tablaEspecie.php');
      ?>
</body>
</html>