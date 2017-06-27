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

      $mysqli->query("DELETE FROM listadoRaza
      	              WHERE idRaza= '$_REQUEST[idRaza]'") or die($mysqli->error);

      $mysqli->close();
      header("location:tablaRaza.php");
      ?>
</body>
</html>