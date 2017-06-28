<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioVeterinario.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Mostrar mascota propietario</title>
  <meta charset="utf-8">
<link rel="icon" href="../../favicon.ico">


    <!-- Latest compiled and minified CSS -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/nuevoregistro.css">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-1.7.1.min.js"></script>
</head>
<body>

<style> 
body{
    background-image:url("../imagenes/especie.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
   color: #000;
    }

form{
  width: 500px;
  height: 210px;
  margin: auto;
  background: rgba(0,0,0,0.3);  
  padding: 5px,5px;
  box-sizing: border-box;
  margin-top: 50px,
  border-radius:200px;
}
input{
 box-sizing: border-box; 
}  
</style>

<div class="container">
<?php 
    include("../models/conexion.php");
    $mysqli=conectar();
    $docu=$_POST['documento'];

    $registro=$mysqli->query("SELECT m.idMascota,m.nombreMas,p.numDocumento from propietario p inner join mascota m on (p.idPropietario=m.codPropietario) where p.numDocumento='$docu'") or die($mysqli->error);
         if ($registro==true) { 
          $reg=$registro->fetch_array();

          $reg1=$mysqli->query("SELECT m.idMascota,m.nombreMas,p.numDocumento from propietario p inner join mascota m on (p.idPropietario=m.codPropietario) where p.numDocumento='$docu'") or die($mysqli->error);
              if ($reg['numDocumento']==$docu) {  
              ?> 

<br>
<div align="right">
<a href="escritorioauxiliar.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> </span></button></a> 
</div>

     <form  class="form-inline"  method="POST" action="datosSecundarios.php">
     <div class="col-md-12 col-md-offset-0"> 
     <div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none; "><font face="Cooper Black" color="#fff">Mascotas</font></h2>
  </div>
<center>
     <div class="inputGroupContainer">
  <div class="col-md-10 input-group
    <label class="form-control"></label> 
     <select name="mascotas" class="form-control" required> 
                   <?php  
              while($reg2=$reg1->fetch_array())
              {
                    
                    echo"<option value=\"".$reg2['idMascota']."\">"
                        .$reg2['nombreMas']."</option>";
                          
            }

            ?>
             </select>
             
</center> 
<br>
<div class="footer" align="center">
    <button type="submit" class="btn btn-info">Agregar chequeo <span class="glyphicon glyphicon-eye-open"> </span></button>
              </form>
<?php
           }else{
            echo '<td><script>alert("USUARIO NO ESTA REGISTRADO");location.href ="javascript:history.back()";</script></TD>';}
           }else{
            echo 'No hay consulta';
           }

           $mysqli->close();
     ?>

</div>
</form>
</body>
</html>