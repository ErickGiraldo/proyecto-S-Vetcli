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
      $_SESSION['propietario']=$_REQUEST['documento'];
// se llama la conexión a la base de datos mediante la función conectar de la libreria conectar
       include("../models/conexion.php");
       $mysqli=conectar();

         $docu=$_POST['documento'];
// inserciones que se haran a la base de datos en la vista datosPropietario
       $registro=$mysqli->query("INSERT INTO Propietario (nombres,codDocumento,numDocumento,telefono,celular,direccion,correo)
                                 values('$_REQUEST[nombres]',
                                 '$_REQUEST[tipoDocu]',
                                 '$_REQUEST[documento]',
                                 '$_REQUEST[telefono]',
                                 '$_REQUEST[celular]',
                                 '$_REQUEST[direccion]',
                                 '$_REQUEST[correo]') ") or die($mysqli->error);

//inserciones que se van hacer en la vista datosChequeo de la base de datos
      $var = $mysqli->query("select idPropietario from propietario where numDocumento='$docu'") or die($mysqli->error);
$datos=$var->fetch_array();

             $registro=$mysqli->query("INSERT INTO mascota (nombreMas,sexo,color,fechaNaci,codPropietario,codEspecie,codRaza)
                                 values ('$_REQUEST[mascota]','$_REQUEST[sexo]','$_REQUEST[color]','$_REQUEST[fecha]',
                                 '$datos[idPropietario]',
                                 '$_REQUEST[especie]',
                                 '$_REQUEST[raza]') ") or die($mysqli->error);
        $mysqli->close();//se cierra la conexión
//redireciona a la pagina escritorio cuando se realizan las inserciones
       header("location: escritorioAuxiliar.php");
       ?>
</body>
</html> 