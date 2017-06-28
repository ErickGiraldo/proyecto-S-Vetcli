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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style> 
body{
    background-image:url("../imagenes/index.jpg");
    background-size:cover;
    background-attachment: fixed;
    color: #000;
    }
p{
  color: red;
  margin: 0 auto;
}
    </style>

<div class="container">
        <div class="col-md-12 col-md-offset-0">  
<div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none; "><font face="Cooper Black" color="#fff">Razas</font></h2>
</div>


        <div class="well well-sm text-right">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"> </span> Registrar nueva raza</button>

            <a href="escritorioAuxiliar.php" ><button type="button" class="btn btn-danger btn-lg">Cancelar <span class="glyphicon glyphicon-remove"> </span></button></a>
            </form>
        </div>
      
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro</h4>
              </div>
            <form action="validarRaza.php" method="POST" name="raza">
              <div class="modal-body">
                   <label for="raza">Nombre de la nueva raza</label>
                  <input type="text"  class="form-control" name="nomRaza" id="nombre" onkeyup="agregar();" /><p id="validarNombre"></p>
              </div>
        
              <div class="modal-footer">
                <input type="button" class="btn btn-info" value="Registrar" name="Enviar">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-eye-close"> </span></button>
              </div>
            </form>     
        </div>  
    </div>
  </div>
  <!--fin modal especie-->


        <div>
        <?php 
        include '../models/conexion.php';

        $mysqli=conectar();

        $registro=$mysqli->query("SELECT * FROM ListadoRaza")
                  or die($mysqli->error);
                echo '<table class="table table-striped">';
                echo'<thead>';
                echo '<tr><th>Raza</th><th>Modificar</th><th>Eliminar</th></tr>';
                echo'</thead>';
               while ($reg=$registro->fetch_array()) 
               {    
                    echo'<tbody>';
                    echo '<tr>';
                    echo '<td>';
                    echo $reg['nomRaza'];
                    echo '</td>';
                    echo '<td>'; 
                    echo'<a href="modificarRaza.php? idRaza='.$reg['idRaza'].' type="button"  class="btn btn-success"><span class="glyphicon glyphicon-pencil"> </span></a>';
                    echo'</td>';
                    echo '<td>';
                ?>
                 <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="eliminarRaza.php?idRaza='<?php echo $reg['idRaza'];?>'" class="btn btn-warning">Eliminar <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span></a>
                 </td>
                  <?php
                    echo "</tr>";
                    echo'</tbody>';
               } 
               $mysqli->close();
         ?>
         </div>
</div>         
</body>
<script src="../js/especieNueva.js"></script>
</html>