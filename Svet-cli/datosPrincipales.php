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

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="js/jquery-1.7.1.min.js"></script>
</head>
<body>

<style> 
body{
    background-image:url("../imagenes/fondoFormulario2.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
    color: #000;
    }
p{
  color: red;
}
    </style>

    <div align="right">
<a href="escritorioAuxiliar.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> </span></button></a> </div>

    <div class="col-md-12 col-md-offset-0">  
   <div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none; "><font face="Cooper Black" color="#fff">Datos Propietario</font></h2>
    </div>
  
  
  <form class="form-inline" action="validarDatosPrincipales.php" id="validar_form" method="POST" name="validar" onsubmit="return validarFormP();">

        <div class="col-md-2 selectContainer">  
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>  
            <label for="nombres">Nombres completos:</label>
            <input type="text" class="form-control" id="nombres" placeholder="Digite el nombre "  name="nombres" onkeyup="validarNombre();">
        </div><p id="validarNombre"></p>
        </div>
  
 <div class="col-md-2 selectContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
          <label for="tipo">Tipo documento:</label>
          <select name="tipoDocu" id="tipo" class="form-control" onchange="validarTipo();">
          <option value="0">Seleccione uno</option>
                <?php 

                   include("../models/conexion.php");
                    $mysqli=conectar();

                    $registro=$mysqli->query("SELECT * FROM tipoDocumento") or die($mysqli->error);

                    while ($reg=$registro->fetch_array()) 
                {
                echo"<option value=\"".$reg['idTipoDocu']."\">"
                    .$reg['documento']."</option>";    
                }
                $mysqli->close();
                 ?>
            </select>
          </div><p id="validarTipoDocu"></p>
 </div>

          <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
            <label for="docu" >Documento:</label>
            <input type="text" class="form-control" id="docu" placeholder="digite numero de documento" name="documento" onkeyup="validarDocumento();">
          </div><p id="validarDocu"></p>
          </div>
          
          <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <label for="tel">Télefono:</label>
          <input type="text" class="form-control" id="tel" placeholder="Digite el télefono" name="telefono"><p id="validarTel"></p>
          </div>
          </div>
           
          <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
          <label for="cel">Celular:</label>
          <input type="text" class="form-control" id="cel" placeholder="Digite el celular" name="celular" onkeyup="validarCelular();">
          </div><p id="validarCel"></p>
        </div>

          <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <label for="direc">Dirección:</label>
          <input type="text" class="form-control" id="direc" placeholder="Digite la dirección" name="direccion" onkeyup="validarDireccion();">
        </div><p id="validarDirecc"></p>
        </div><br><br> <br><br><br>
  
          <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Digite un email" name="correo" onkeyup="validaEmail();">
          </div><p id="validarEmail"></p>
        </div><br><br><br><br><br>

        <div>
            <h2 class="well well-sm"  style="background-color: #000; text-align: center; border: none;"><font face="Cooper Black" color="#fff">Datos Mascota</h1></font>
        </div>
        
        <div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>     
            <label for="mascota">Nombre mascota:</label>
            <input type="text" class="form-control" placeholder="Nombre de la mascota" name="mascota" id="mascota" onkeyup="validarMascota();">
        </div><p id="validarMascota"></p>
        </div>

              <div class="col-md-2 selectContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <label for="sexo">Sexo:</label>
            <select name="sexo" class="form-control" id="sexo" onchange="validarSexo();">
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
            <input type="text" class="form-control" placeholder="Digite el color" name="color" id="color" onkeyup="validarColor();">
        </div>
        <p id="validarColor"></p>
        </div> 
        
       <div class="col-md-2 selectContainer"> 
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
            <label for="especie">Especie:</label>
            <select name="especie" class="form-control" id="especie" onchange="validarEspecie();">
               <option value="0">Elija una especie</option>
                <?php 
                $mysqli=conectar();

                $registro=$mysqli->query("SELECT * FROM ListadoEspecie") or die($mysqli->error);

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
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
            <label for="raza">Raza:</label>
            <select name="raza" class="form-control" id="raza" onchange="validarRaza();">
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

        <div class="col-md-2 selectContainer"> 
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <label for="fecha">Fecha nacimiento:</label>
            <input type="date" class="form-control" name="fecha" id="fecha" onchange="validarFecha();">
        </div><p id="validarFecha"></p>
        </div><br><br>
       </div> 
        
        <div class="footer" align="center">
         
            <button type="button" class="btn btn-info" name="bEnviar">Guardar <span class="glyphicon glyphicon-floppy-disk" > </span></button>

            <a href="escritorioAuxiliar.php"><button type="button" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"> </span></button></a> 
        </div>

  </form>
</body>
<script src="../js/principales.js"></script>
</html>
