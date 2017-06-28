<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioVeterinario.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>NuevoUsuario</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Svet-cli</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  <link rel="stylesheet" type="text/css" href="../css/nuevoregistro.css">
<style type="text/css">

  p{
    margin: 0;
    color: red;
    padding-bottom: 12px;
}

    body{
    background-image:url("../imagenes/fondo.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
   color: #000;
    }

  }</style>

  <script type="text/javascript"> 

 $('#usuario').focusout( function(){
    if($('#usuario').val()!= ""){
        $.ajax({
            type: "POST",
            url: "validar.php",
            data: "usuario="+$('#usuario').val(), 
            success: function(respuesta){
              if(respuesta==1)
               $('#msgUsuario').html("No Disponible").css("color","red");
              else
                 $('#msgUsuario').html("Disponible").css("color","green");
                
            }
        });
    }
});         
</script>
</head>
<body>

<br>
  <div class="container">

    <form class="well form-horizontal" action="validarRegistro.php" method="POST"   id="contacto-frm" name="contacto_frm">
<fieldset>

<!-- Formulario Registro -->
<center>
<legend><FONT SIZE="10" color="#000000" face="Cooper Black">Registro</FONT></legend></center>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nombres</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  type="text" class="form-control" placeholder="Nombre completo" name="nombreUsu"  id="nombre" onkeyup="validarNombre();">
    </div><p id="nombrer"></p>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Nombre de Usuario</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon help-block"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" class="form-control" placeholder="Usuario"  name="usuario" id="usuario" onkeyup="validarUsuario();"> 
    </div><p id="usuarior"></p>
  </div>
</div>


<!-- Text input Contraseña-->
<div class="form-group">
  <label class="col-md-4 control-label">Contraseña</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input type="password" class="form-control" placeholder="Password" name="clave" id="clave" onkeyup="contrasena();">
    </div><p id="claver"></p>
  </div>
</div>

<!-- Text input Repita Contraseña-->
<div class="form-group">
  <label class="col-md-4 control-label"> Repita Contraseña</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input type="password" class="form-control" placeholder="Password" name="clave1" id="reClave" onkeyup="contrasena();">
    </div><p id="reClaver"></p>
  </div>
</div>

<!-- Select Rol -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Rol</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="rol" class="form-control" id="rol" onchange="validarRol();">
            <option value="0">Seleccione un rol</option>
                <?php 
                include('../models/conexion.php');
                $mysqli=conectar();

                $registro=$mysqli->query("SELECT * FROM rol") or die($mysqli->error);

                while ($reg=$registro->fetch_array()) 
                {

                echo"<option value=\"".$reg['idRol']."\">"
                    .$reg['rol']."</option>";    
                }
                $mysqli->close();
                 ?>
            </select>
  </div>
  <p id="rolr"></p>
</div>
</div>


<!-- Text input Telefono-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telefono</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input type="text" class="form-control" placeholder="(845)555-1212"  name="telefono" id="tel" pattern="[0-9]{7,7}">
    </div><p id="telr"></p>
  </div>
</div>

<!-- Text input Celular-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Celular</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input  type="text" class="form-control" placeholder="######" name="celular" id="cel" onkeyup="validarCelular();">
    </div><p id="celr"></p>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label" for="email">Correo</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input  type="text" class="form-control" placeholder="alguien@gmail.com" name="correo" id="email" onkeyup="validarEmail();">
    </div><p id="emailr"></p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="button" class="btn btn-info" name="bEnviar" >Registrarse <span class="glyphicon glyphicon-send"> </span></button>

    <a href="escritorioVeterinario.php"><button type="button" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"> </span></button></a>
  </div>
</div>

</fieldset>
</form>
</div>
    </div> 
</body>
<script src="../js/validarRegistro.js"></script>
</html>