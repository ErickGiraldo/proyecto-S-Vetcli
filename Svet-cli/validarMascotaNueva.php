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
	 include("../models/conexion.php");

	 $mysqli=conectar();
$docu=$_POST['documento'];
      $var = $mysqli->query("select idPropietario from propietario where numDocumento='$docu'") or die($mysqli->error);
		$datos=$var->fetch_array();
	 //inserciones que se van hacer en la vista datosChequeo de la base de datos
       $registro=$mysqli->query("INSERT INTO Mascota (nombreMas,sexo,color,fechaNaci,codPropietario,codEspecie,codRaza)
                                 values ('$_REQUEST[mascota]','$_REQUEST[sexo]','$_REQUEST[color]','$_REQUEST[fecha]','$datos[idPropietario]','$_REQUEST[especie]','$_REQUEST[raza]') ") or die($mysqli->error);
        $mysqli->close();//se cierra la conexión
//redireciona a la pagina escritorio cuando se realizan las inserciones
       header("location: escritorioAuxiliar.php");

	  ?>
</body>
</html>