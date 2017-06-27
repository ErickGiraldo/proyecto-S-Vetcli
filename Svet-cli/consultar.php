<!DOCTYPE html>
<html>
<head>
	<title>Veterinaria</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
	<link rel="icon" href="../../favicon.ico">

    <!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

   <script src="js/jquery-1.7.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/nuevoregistro.css">


</head>
<body>

<style> 
body{
    background-image:url("../imagenes/consulta.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
   color: #000;
    }

form{
  width: 500px;
  height: 200px;
  margin: auto;
  background: rgba(0,0,0,0.2);  
  padding: 5px,5px;
  box-sizing: border-box;
  margin-top: 50px,
  border-radius:200px;
}
input{
 box-sizing: border-box; 
}  
</style>
<center>

<div align="right">
<a href="escritorioveterinario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> </span></button></a> </div>

<!-- Formulario Consulta -->
    <form class="form-inline" action="mascotas_cheqeo.php" method="POST" id="contact_form">
	<div class="col-md-12 col-md-offset-0">  
	<div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none; "><font face="Cooper Black" color="#fff">Consultar Historia Clinica</font></h2>
	</div>

<label  class="control-label" for="docu">Doumento del propietario</label>
  <div class="inputGroupContainer">
  <div class=" col-md-8 input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
 <input type="text" class="form-control" name="documento" id="docu"  required pattern="[0-9]{10,10}">
</div>
  </div>  
<br> 


	     	<a href="escritorioVeterinario.php"><button type="button" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"> </span></button></a>

 	<input type="submit" value="Consultar" class="btn btn-info">
	     </div>
	      </div> 
     </form>
   
   </center> 
</body>
</html>