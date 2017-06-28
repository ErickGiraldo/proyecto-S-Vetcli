<?php  

 function conectar(){

	$mysqli= new mysqli("localhost","root","","veterinaria");
	if ($mysqli->connect_error) 
		die("Problemas con la conexion");

	return $mysqli;
}

?>