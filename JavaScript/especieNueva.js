function agregar(){
	var agregar= document.getElementById('nombre');

	var exEspecie= /^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{3,45}$/;
	confirmar=true;

	if (!agregar.value) {
		document.getElementById('validarNombre').innerHTML="El campo es requerido";
		agregar.focus();
		confirmar= false;
	}else if (agregar.value<3) {
		document.getElementById('validarNombre').innerHTML="El campo solo acepta minimo 3 caracteres";
		agregar.focus();
		confirmar= false;
	}else if (!exEspecie.exec(agregar.value)) {
		document.getElementById('validarNombre').innerHTML="El campo solo acepta 45 letras maximo ";
		agregar.focus();
		confirmar=false;
	}else{
		document.getElementById('validarNombre').innerHTML="";
		
	}

}

function eliminar(){
	var eli=document.getElementById('eliminar');

	if (!eli.value) {
		confirm("Seguro que quieres eliminar este registro");
	}
}

//funcion para registrar una nueva raza
function enviarRaza(){
		agregar();
		if (confirmar) {
			alert("El registro se realizo Exitosamente");
			document.raza.submit(); 	
		}

}

//llama a la funcion enviarRaza
window.onload= function()
{
	var raza;
	raza= document.raza.Enviar;
	raza.onclick = enviarRaza;
}