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
textarea{
	size: 10 20;
}
p{
	color: red;
	margin:  0 auto;
}
    </style>


    <div align="right">
<a href="consultar.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> </span></button></a> </div>

    <div class="col-md-12 col-md-offset-0">  
   <div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none; "><font face="Cooper Black" color="#fff">Datos Chequeo</font></h2>
    </div>
  

<form class="form-inline" action="validarDatosSecundarios.php" method="POST" name="chequeo">


		
		<input type="hidden"  class="form-control" name="mascota" value="<?php echo $_REQUEST['mascotas']; ?>">


		<div class="col-md-2 selectContainer"> 
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<label for="fecha">Fecha</label>
		<input class="form-control" type="date" name="fecha" id="fecha" onchange="validarFecha();">
		</div><p id="fechaR"></p>
		</div>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>  
		<label for="fc">FC</label>
		<input class="form-control" placeholder="Frecuencia Cardiaca" type="text" name="fc" id="fc" onkeyup="validarFc();">
		</div><p id="fcR"></p>
		</div>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-signal"></i></span>  
		<label for="fr">FR</label>
		<input class="form-control" placeholder="Frecuencia Respiratoria" type="text" name="fr" id="fr" onkeyup="validarFr();">
		</div><p id="frR"></p>
		</div>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-signal"></i></span> 
		<label for="tllc">TLLC</label>
		<input class="form-control" placeholder="" type="text" name="tllc" id="tllc"  onkeyup="validarTllc();">
		</div><p id="tllcR"></p>
		</div>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span> 
		<label for="tempe">Temperatura</label>
		<input class="form-control" placeholder="Medida en °C" type="text" name="temperatura" id="tempe" onkeyup="validarTemperatura();">
		</div><p id="temperaturaR"></p>
		</div>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span> 
		<label for="peso">Peso</label>
		<input class="form-control" placeholder="Medida en Kg" type="text" name="peso" id="peso" onkeyup="validarPeso();">
		</div><p id="pesoR"></p>
		</div><br><br><br><br>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-ice-lolly"></i>
         <i class="glyphicon glyphicon-ice-lolly-tasted"></i></span>
		<label for="entero">Entero</label>
		<select name="entero" class="form-control" id="entero" onchange ="validarEntero();">
		<option value="0">Elija uno</option>
			<option>Si</option>
			<option>No</option>
		</select>
		</div><p id="enteroR"></p>
		</div>

		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
		<label for="vacuna">Vacunas</label>
		<input class="form-control" placeholder="(SI - NO)" type="text" name="vacunas" id="vacuna" onkeyup="validarVacunas();">
		</div><p id="vacunaR"></p>
		</div>


		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
		<label for="alimenta">Alimentación</label>
		<input class="form-control" placeholder="" type="text" name="alimentacion" id="alimenta" onkeyup="validarAlimentacion();">
		</div><p id="alimentacionR"></p>
		</div>

		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
		<label for="despara">Desparacitación</label>
		<input class="form-control" placeholder="" type="text" name="desparacitacion" id="despara" onkeyup="validarDesparacitacion();">
		</div><p id="desparacitacionR"></p>
		</div>

		<div class="col-md-2 selectContainer">  
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
		<label for="anamnesico">Anamnesicos</label>
		<textarea class="form-control"  name="anamnesico" id="anamnesico" onkeyup="validarAnamnesico();"></textarea>
		</div><p id="anamnesicoR"></p>
		</div>
		</div>



		<div class="col-md-12 col-md-offset-0">  
   <div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none; "><font face="Cooper Black" color="#fff">Diagnostico</font></h2>
    </div>

<center>
    	<div class="col-md-2 selectContainer">  
        <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
			<label>Diagnósticos</label>
			<textarea class="form-control" name="diagnostico" id="diagnostico" style="width: 750%; height: 100px;" onkeyup="validarDiagnostico();"></textarea>
		</div><p id="diagnosticoR"></p>
		</div>
		</div>


	<div class="footer" align="center">
         
        <button type="button" class="btn btn-info" name="enviarChequeo">Guardar <span class="glyphicon glyphicon-floppy-disk"> </span></button>
        <a href="consultar.php"><button type="button" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"> </span></button></a> 
        </div>	

</form>
</center>
</div>
</body>
<script src="../js/secundarios.js"></script>
</html>