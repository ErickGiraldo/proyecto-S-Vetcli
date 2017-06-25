<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioAuxiliar.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Svet-cli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/nuevoregistro.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</head>
<body>
<style> 
body{
    background-image:url("../imagenes/fondoFormulario.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
    }
    p{
      color: red;
      margin: 0 auto;
    } 
    </style>
<br>
<div align="right">
<a href="escritorioAuxiliar.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> </span></button></a> </div>

    <div class="col-md-12 col-md-offset-0">  
    <div>
        <h2  class="well well-sm"   style="background-color: #000; text-align: center; border: none;"><font face="Cooper Black" color="#fff">Agregar Nueva Mascota</font></h2>
    </div>

<br>
        <form class="form-inline" action="validarMascotaNueva.php" method="POST" name="validarform">

          <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span><label for="docu">Documento del propietario:</label>
            <input type="text" class="form-control" placeholder="Documento del propietario" name="documento" id="docu" onkeyup="validarDocumentoA();">
        </div><p id="validarDocu"></p>
        </div>

      
        <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
            <label for="mascota">Nombre mascota:</label>
            <input type="text" class="form-control" placeholder="Nombre de la mascota" name="mascota" id="mascota" onkeyup="validarMascotaA();">
        </div><p id="validarMascota"></p>
        </div>
        
        <div class="col-md-2 selectContainer">
        <div class=" col-md-12 input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <label for="sexo">Sexo:</label>
            <select name="sexo" class="form-control" id="sexo" onchange="validarSexoA();">
            <option value="0">Elija uno</option>
                <option>Macho</option>
                <option>Hembra</option>
            </select>
        </div><p id="validarSexo"></p>
        </div>
        
        <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
            <label for="color">Color:</label>
            <input type="text" class="form-control" placeholder="Digite el color" name="color"  id="color" onkeyup="validarColorA();">
        </div><p id="validarColor"></p>
        </div>
        
       <div class="col-md-2 selectContainer">
        <div class=" col-md-12 input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span> 
            <label for="especie">Especie:</label>
            <select name="especie" class="form-control" id="especie" onchange="validarEspecieA();">
            <option value="0">Elija una especie</option>
                <?php 
                include('../models/conexion.php');
                $mysqli=conectar();

                $registro=$mysqli->query("SELECT * FROM Especie") or die($mysqli->error);

                while ($reg=$registro->fetch_array()) 
                {
                echo"<option value=\"".$reg['idEspecie']."\">"
                    .$reg['nomEspecie']."</option>";    
                }
                $mysqli->close();
                 ?>
            </select>
        </div><p id="validarEspecie"></p>
        </div>
        
         <div class="col-md-2 selectContainer">
        <div class="col-md-12 input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>   
            <label for="raza">Raza:</label>
            <select name="raza" class="form-control" id="raza" onchange="validarRazaA();">
            <option value="0">Elija una raza</option>
                <?php 
                $mysqli=conectar();
                $registro=$mysqli->query("SELECT * FROM raza") or die($mysqli->error);
                while ($reg=$registro->fetch_array()) {
                    
                echo "<option value=\"".$reg['idRaza']."\">".$reg['nomRaza']."</option>";
                }
                $mysqli->close();
                 ?>
            </select>
        </div><p id="validarRaza"></p>
        </div>
        <br><br><br><br>

        <div class="col-md-2 selectContainer"> 
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <label for="fecha">Fecha nacimiento:</label>
            <input type="date" class="form-control" name="fecha"  id="fecha" onchange="validarFechaA();">
        </div><p id="validarFecha"></p>
        </div>


       <br><br><br><br><br><br>
         <div class="footer" align="center">

            <button type="button" class="btn btn-info" name="bEnviar">Guardar <span class="glyphicon glyphicon-floppy-disk"> </span></button>

            <a href="escritorioAuxiliar.php"><button type="button" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"> </span></button></a> 
        </div>

  </form>
<script src="../js/nuevaMascota.js"></script>
</body>
</html>