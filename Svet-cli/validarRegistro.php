<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioVeterinario.php');
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
    //Se llama la conxión a la base de datos ustilizando la función conectar
	include("../models/conexion.php");
	$mysqli=conectar();
	$clave=$_POST['clave'];
	$con =password_hash($clave,PASSWORD_BCRYPT);


	$mysqli->query("Insert into usuario 
		(nombreUsu,usuario,clave,codRol,telefono,celular,correo)
		values('$_REQUEST[nombreUsu]','$_REQUEST[usuario]','$con','$_REQUEST[rol]','$_REQUEST[telefono]','$_REQUEST[celular]','$_REQUEST[correo]')")   
	       or die($mysqli->error);
	  $mysqli->close();
	  echo  "Usuario Registrado Exitosamente";
  
  header("location:escritorioVeterinario.php");
 ?>
</body>
</html>