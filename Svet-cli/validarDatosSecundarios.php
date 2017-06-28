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
    <div>
    	<?php 

    	include('../models/conexion.php');
    	$mysqli=conectar();

//instrucción para insertar datos en la tabla chequeo
    	$registro=$mysqli->query("INSERT INTO chequeo (fc,fr,tllc,temperatura,peso,entero,vacunas,alimentacion,desparacitacion,anamnesicos,codMascota,fecha) Values('$_REQUEST[fc]','$_REQUEST[fr]','$_REQUEST[tllc]','$_REQUEST[temperatura]','$_REQUEST[peso]','$_REQUEST[entero]','$_REQUEST[vacunas]','$_REQUEST[alimentacion]','$_REQUEST[desparacitacion]','$_REQUEST[anamnesico]','$_REQUEST[mascota]','$_REQUEST[fecha]')") or die($mysqli->error);

//Instrucción para insertar datosen la tabla diagnostico
    	$registro=$mysqli->query("INSERT INTO diagnostico(diagnostico,codMascota) Values('$_REQUEST[diagnostico]','$_REQUEST[mascota]')") or die($mysqli->error);

    	$mysqli->close();

    	header("location:escritorioVeterinario.php");
    	 ?>
    </div>
</body>
</html>
