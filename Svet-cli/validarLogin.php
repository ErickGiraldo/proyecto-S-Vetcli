<?php
session_start();
include('../models/conexion.php');
$mysql = conectar();

 $id=$_POST['usuario'];
 $pass=$_POST['clave']; 

$registros=$mysql->query("select * from usuario where usuario='" . $id . "'")
or die($mysql->error);
$row=$registros->fetch_array();



if ($registros==true) {
	if ($fa=password_verify($pass,$row['clave'])&$row['usuario']==$id) 
	{
		$_SESSION['username']=$row['nombreUsu'];
		$_SESSION['id']=$row['idUsuario'];
		
		$r=$mysql->query("SELECT * FROM rol");
		$rowe=$r->fetch_array();
		if($rowe['idRol']==$row['codRol']) {
			 
			$_SESSION['sesion']=1;
			header('location:escritorioVeterinario.php');	
			
		}else
		if ($row['codRol']==2) {
			$_SESSION['sesion']=1;
			header("location:escritorioAuxiliar.php");
		}
	}else{
		echo "<script>alert('usuario o contraseña incorrecto');location.href ='javascript:history.back()';</script>";
	}
      exit();

    } else{
    	echo "<script>alert('usuario o contraseña incorrecto');location.href ='javascript:history.back()';</script>";
    }
    $mysql->close();    
?> 