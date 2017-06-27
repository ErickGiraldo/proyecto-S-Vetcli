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

      $mysqli->query("DELETE FROM ListadoEspecie
      	              WHERE idEspecie=$_REQUEST[idEspecie]")
                      or die($mysqli->error);

    $mysqli->close();
    header('location:tablaEspecie.php');
      ?>
</body>
</html>
