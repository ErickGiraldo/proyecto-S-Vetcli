function validarForm() {


		if (validarNombre() && validarTipo() && validarDocumento() && validarCelular() && validarDireccion() && validarEmail()
			&& validarMascota() && validarSexo() && validarColor() && validarEspecie() && validarRaza() && validarFecha()) {
			
			alert("El formulario se ha enviado Exitosamente");
			document.validar.submit(); 	
		}else{
			return false;
		}
			
}


window.onload= function()
{
	var jenviar;
	jenviar= document.validar.bEnviar;
	jenviar.onclick = validarForm;
}

function validarNombre()
{	var exNombre=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{10,50}$/; 
	var nombre=document.getElementById("nombres"); 
	
	if (!nombre.value || /^\s+$/.test(nombre)) {
			document.getElementById("validarNombre").innerHTML="El campo nombre es requerido";
			nombre.focus();
			return false;
		}
		else if (!exNombre.exec(nombre.value)) {
			document.getElementById("validarNombre").innerHTML="El campo nombre solo acepta letras";
			nombre.focus();
			 return  false;
		}
		else if (nombre.value.length > 50) {
			document.getElementById("validarNombre").innerHTML="El campo nombre maximo debe tener 50 caracteres";
			nombre.focus();
			 return false;
		}
		else if(nombre.value.length < 6){
		document.getElementById("validarNombre").innerHTML="El campo nombre minimo debe tener 10 caracteres";
		nombre.focus();
		 return false;
		}else{
			document.getElementById("validarNombre").innerHTML="";
			return true;
		}
} 

function validarTipo(){
	var tipoDocu= document.getElementById("tipo");
	
	if (!tipoDocu.value || tipoDocu.value==0) {
			document.getElementById("validarTipoDocu").innerHTML="Seleccione un tipo Documento";
			tipoDocu.focus();
			return false;	
		}else{
			document.getElementById("validarTipoDocu").innerHTML="";
			return	true;
		}
}

function validarDocumento(){
	var exDocu=/^[0-9]{10,10}$/;
	var docu =document.getElementById("docu");

	if (!docu.value || /^\s+$/.test(docu)) {
		document.getElementById("validarDocu").innerHTML="El campo documento es requerido";
		docu.focus();
		return false;
	} 
		else if (!exDocu.exec(docu.value)) {
			document.getElementById("validarDocu").innerHTML="El campo documento solo acepta 10 caracteres numericos";
			docu.focus();
			return false;
	}else{
		document.getElementById("validarDocu").innerHTML="";
		return true;
	}
}

function validarCelular(){
	var exCel=/^[0-9]{10,10}$/;
	var cel= document.getElementById("cel");
	

	if (!cel.value || /^\s+$/.test(cel)) {
		document.getElementById("validarCel").innerHTML="El campo celular es requerido";
		cel.focus();
		 return false;	
		}
		else if (!exCel.exec(cel.value)) {
			document.getElementById("validarCel").innerHTML="El campo celular solo acepta 10 caracteres numericos";
			cel.focus();
			return false;
		}else{
			document.getElementById("validarCel").innerHTML="";
			return true;
		}
}

function validarDireccion(){
	var exDirecc=/^[a-zA-Z0-9-#\s]{10,100}$/;
	var direcc=document.getElementById("direc");
	

	if (!direcc.value || /^\s+$/.test(direcc)) {
			document.getElementById("validarDirecc").innerHTML="El campo dirección es requerido";
			direcc.focus();
			return false;
	}
	else if (!exDirecc.exec(direcc.value)) {
			document.getElementById("validarDirecc").innerHTML="El campo dirección minimo debe tener 10 caracteres";
			direcc.focus();
			return false;
	}else{
		document.getElementById("validarDirecc").innerHTML="";
		return true;	
	}
}

function validarEmail(){
	var exEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
	var email=document.getElementById("email");

		if (!email.value || /^\s+$/.test(email)){
			document.getElementById("validarEmail").innerHTML="El campo email es requerido";
			email.focus();
			return false;
		}else if (!exEmail.exec(email.value)) {
			document.getElementById("validarEmail").innerHTML="El email no es valido";
			email.focus();
			return false;
		}else{
			document.getElementById("validarEmail").innerHTML="";
			return true;
		}
}

function validarMascota(){
	var exMasco=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{3,45}$/;
	var masco=document.getElementById("mascota");
	

	if (!masco.value || /^\s+$/.test(masco)) {
			document.getElementById("validarMascota").innerHTML="El campo mascota es requerido";
			masco.focus();
			return false;
		}else if (!exMasco.exec(masco.value)) {
			document.getElementById("validarMascota").innerHTML="El campo mascota solo acepta letras";
			masco.focus();
			return false;
		}else{
			document.getElementById("validarMascota").innerHTML="";
			return true;
		}
}

function validarSexo(){
	var sexo=document.getElementById("sexo");

	if (!sexo.value || sexo.value==0) {
			document.getElementById("validarSexo").innerHTML="Elija algún sexo";
			sexo.focus();
			return false;
	}else{
		document.getElementById("validarSexo").innerHTML="";
		return true;
	}
}

function validarColor(){
	var exColor=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{3,45}$/;
	var color=document.getElementById("color");

	if (!color.value || /^\s+$/.test(color)) {
			document.getElementById("validarColor").innerHTML="Este campo es requerido";
			color.focus();
			return false;
		}else if (!exColor.exec(color.value)) {
			document.getElementById("validarColor").innerHTML="El campo color solo acepta letras";
			color.focus();
			return false;
		}else{
			document.getElementById("validarColor").innerHTML="";
			return true;
		}
}

function validarEspecie(){
	var espe=document.getElementById("especie");

	if (!espe.value || espe.value==0) {
			document.getElementById("validarEspecie").innerHTML="Elija alguna especie";
			espe.focus();
			return false;
	}else{
		document.getElementById("validarEspecie").innerHTML="";
		return true;
	}
}

function validarRaza(){
	var raza=document.getElementById("raza");

	if (!raza.value || raza.value==0) {
			document.getElementById("validarRaza").innerHTML="Elija alguna especie";
			raza.focus();
			return false;
	}else{
		document.getElementById("validarRaza").innerHTML="";
		return true;
	}
}

function validarFecha(){
	var fecha=document.getElementById("fecha");

	if (!fecha.value) {
			document.getElementById("validarFecha").innerHTML="El campo fecha es requerido";
			fecha.focus();
			return false;		
	}else{
		document.getElementById("validarFecha").innerHTML="";
		return true;
	}	
}