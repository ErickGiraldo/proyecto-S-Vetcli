<?php
require_once '../models/conexion.php';
$mysqli=conectar(); 
session_start();
if ($_SESSION['sesion']==0){
header('location: escritorioAuxiliar.php');
}
//echo $_POST['actual'];
echo $clave=$_POST['clave'];
echo $sesionId=$_SESSION['id'];
$nueva=password_hash($clave,PASSWORD_BCRYPT);

$modi= mysqli_query($mysqli,("UPDATE usuario SET clave='$nueva' WHERE idUsuario='$sesionId'"));

if ($modi==true) {
  echo "<script>alert('La contraseña se modifico Exitosamente');location.href ='javascript:history.back()';</script>";
}else{
  echo "<script>alert('Error al modificar la contraseña');location.href ='javascript:history.back()';</script>";
}