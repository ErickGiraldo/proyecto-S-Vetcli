function validarDocumentoA(){
	var exDocu=/^[0-9]{10,10}$/;
	var doc =document.getElementById("docu");

	if (!doc.value || /^\s+$/.test(doc)) {
		document.getElementById("validarDocu").innerHTML="El campo documento es requerido";
		doc.focus();
		return false;
	} 
		else if (!exDocu.exec(doc.value)) {
			document.getElementById("validarDocu").innerHTML="El campo documento solo acepta 10 caracteres numericos";
			doc.focus();
			return false;
	}else{
		document.getElementById("validarDocu").innerHTML="";
		return true;
	}
}

function validarMascotaA(){
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

function validarSexoA(){
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

function validarColorA(){
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

function validarEspecieA(){
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

function validarRazaA(){
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

function validarFechaA(){
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
function agregarMascotaNueva() {

		if (validarDocumentoA() && validarMascotaA() && validarSexoA() && validarColorA()
			&& validarEspecieA() && validarRazaA() && validarFechaA()) {
			
			alert("El formulario se ha enviado Exitosamente");
			document.validarform.submit(); 	
		}		
}

window.onload= function()
{
	var jenviar;
		jenviar= document.validarform.bEnviar;
	jenviar.onclick = agregarMascotaNueva;
}	
 