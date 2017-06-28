<?php
session_start();
if ($_SESSION['sesion']==0){
header('location: escritorioAuxiliar.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Veterinaria</title>
	<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-1.7.1.min.js"></script>
<style type="text/css">
body{
    background-image:url("../imagenes/verHistoria.jpg");
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
th,h2{
  background:white;
} 
td{
  background:black;
  color:white;
}
</style>
</head>
<body>
<div class="container">
<div class="panel-body">
<?php 
        include('../models/conexion.php');
        $mysqli=conectar();
        $docu=$_POST['tipoDocu'];
        $fecha=$_POST['fecha'];
        $registro=$mysqli->query("SELECT m.idMascota,p.nombres,t.documento as tipoDocu,p.numDocumento,p.telefono,p.celular,p.direccion,p.correo,m.nombreMas,m.sexo,m.color,TIMESTAMPDIFF(YEAR,fechaNaci,CURDATE()) AS edad,e.nomEspecie,r.nomRaza,c.fecha,c.fc,c.fr,c.tllc,c.temperatura,c.peso,c.entero,c.vacunas,c.alimentacion,c.desparacitacion,c.anamnesicos,d.diagnostico FROM propietario p
                      inner join  tipoDocumento t on (t.idTipoDocu=p.codDocumento) 
                      inner join mascota m on (p.idPropietario=m.codPropietario)
                      inner join especie e on(e.idEspecie=m.codEspecie)
                      inner join raza r on (r.idRaza=m.codRaza)
                      inner join chequeo c on (c.codMascota=m.idMascota)
                      inner join diagnostico d on(d.codMascota=m.idMascota)
                      WHERE (m.idMascota='$docu' and c.fecha='$fecha') and d.codMascota='$docu'") or die($mysqli->error);

    if ($registro==true) {
    $reg=$registro->fetch_array();
       if ($reg['idMascota']==$docu&&$reg['fecha']==$fecha) {           
            echo'<table class="table table-bordered">';
             echo'<thead>';
                    echo '<tr><h2>Datos Propietario</h2></tr>';
        echo '<tr><th>Nombre</th><th>Tipo Documento</th><th>Documento</th><th>Télefono</th><th>Celular</th><th>Dirección</th><th>Correo</th></tr>';
                 echo'</thead>';
if ($vec=$reg) {

          echo'<tbody>';
          echo '<tr>';
          echo '<td>';
          echo $vec['nombres'];
          echo '</td>';
          echo '<td>';
          echo $vec['tipoDocu'];
          echo '</td>';
          echo '<td>';
          echo $vec['numDocumento'];
          echo '</td>';
          echo '<td>';
          echo $vec['telefono'];
          echo '</td>';
          echo '<td>';
          echo $vec['celular'];
          echo '</td>';
          echo '<td>';
          echo $vec['direccion'];
          echo '</td>';
          echo '<td>';
          echo $vec['correo'];
          echo '</td>';
          echo'</tr>';
          echo '</tbody>'; 

          echo '<table class="table table-bordered">';
           echo'<thead>';
          echo '<tr><h2>Datos Mascota</h2></tr>';
          echo '<tr><th>Mascota</th><th>Sexo</th><th>Color</th><th>Edad</th><th>Especie</th><th>Raza</th>';   
          echo'</thead>';
           echo'<tbody>';
          echo '<tr>';
          echo '<td>';
          echo $vec['nombreMas'];
          echo '</td>';
          echo '<td>';
          echo $vec['sexo'];
          echo '</td>';
          echo '<td>';
          echo $vec['color'];
          echo '</td>';
          echo '<td>';
          echo $vec['edad'];
          echo '</td>';
          echo '<td>';
          echo $vec['nomEspecie'];
          echo '</td>';
          echo '<td>';
          echo $vec['nomRaza'];
          echo '</td>';
          echo '</tr>';


          echo '<table class="table table-bordered">';
          echo'<thead>';
          echo '<tr><h2>Datos Chequeo</h2></tr>';
          echo '<tr><th>Fecha</th><th>FC</th><th>FR</th><th>TLLC</th><th>Temperatura</th><th>Peso</th><th>Entero</th><th>Vacunas</th><th>Alimentación</th><th>Desparacitación</th><th>Anamnesicos</th>';   
          echo'</thead>';
          echo'<tbody>'; 
          echo '<tr>';
          echo '<td>';
          echo $vec['fecha'];
          echo '</td>';
          echo '<td>';
          echo $vec['fc'];
          echo '</td>';
          echo '<td>';
          echo $vec['fr'];
          echo '</td>';
          echo '<td>';
          echo $vec['tllc'];
          echo '</td>';
          echo '<td>';
          echo $vec['temperatura'];
          echo '</td>';
          echo '<td>';
          echo $vec['peso'];
          echo '</td>';
          echo '<td>';
          echo $vec['entero'];
          echo '</td>';
          echo '<td>';
          echo $vec['vacunas'];
          echo '</td>';
          echo '<td>';
          echo $vec['alimentacion'];
          echo '</td>';          
          echo '<td>';
          echo $vec['desparacitacion'];
          echo '</td>';         
          echo '<td>';
          echo $vec['anamnesicos'];
          echo '</td>';
          echo '</tr>';


          echo '<table class="table table-bordered">';
          echo'<thead>';
          echo '<tr><h2>Datos Diagnóstico</h2></tr>';
          echo '<tr><th>Diagnóstico</th>';   
          echo'</thead>';
          echo'<tbody>';
          echo '<tr>';
          echo '<td>';
          echo $vec['diagnostico'];
          echo '</td>';
          

          echo'</tbody>';
          echo '</table>';
          }else{
          echo "<script>alert('usuario o contraseña incorrecto');location.href ='javascript:history.back()';</script>";
         }
        }else{
          echo 'fabio super';
    }
  }
    $mysqli->close();
 ?>
    <a href="escritorioAuxiliar.php" ><button type="button" class="btn btn-danger btn-lg">Volver</button></a>

 </div>
 </div>
</body>
</html>