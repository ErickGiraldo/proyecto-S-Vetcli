function validarFecha()
{ 
	var fecha=document.getElementById("fecha"); 

 		if (!fecha.value) {
			document.getElementById("fechaR").innerHTML="El campos fecha es requerido";
			fecha.focus();
			return false;	
		} 
		else{
		document.getElementById('fechaR').innerHTML="";
		return true;	
	}
}
function validarFc(){
	var exFc=/^[0-9]{1,4}$/;
	var fc=document.getElementById("fc");

		if (!fc.value) {
			document.getElementById("fcR").innerHTML="El campo fc es requerido";
			fc.focus();
			return false;

		}
		else if (!exFc.exec(fc.value)) {
			document.getElementById("fcR").innerHTML="Solo acepta maximo 4 caracteres numericos";
			fc.focus();
			return false;
		}else{
			document.getElementById("fcR").innerHTML="";
			return true;
		}
}

function validarFr(){
	var exFr=/^[0-9]{1,4}$/;
	var fr=document.getElementById("fr");

		if (!fr.value) {
			document.getElementById("frR").innerHTML="El campo fr es requerido";
			fr.focus();
			return false;

		}
		else if (!exFr.exec(fr.value)) {
			document.getElementById("frR").innerHTML="Solo acepta maximo 4 caracteres numericos";
			fr.focus();
			return false;
		}else{
			document.getElementById("frR").innerHTML="";
			return true;
		}
}

function validarTllc(){
	var exTllc=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ0-9]{1,4}$/;
	var tllc=document.getElementById("tllc");

		if (!tllc.value) {
			document.getElementById("tllcR").innerHTML="El campo tllc es requerido";
			tllc.focus();
			return false;

		}
		else if (!exTllc.exec(tllc.value)) {
			document.getElementById("tllcR").innerHTML="Solo acepta maximo 4 caracteres numericos";
			tllc.focus();
			return false;
		}else{
			document.getElementById("tllcR").innerHTML="";
			return true;
		}
}

function validarTemperatura(){
	var exTemperatura=/^[0-9.Cc°\s]{1,10}$/;
	var temperatura=document.getElementById("tempe");

		if (!temperatura.value) {
			document.getElementById("temperaturaR").innerHTML="El campo temperatura es requerido";
			temperatura.focus();
			return false;

		}
		else if (!exTemperatura.exec(temperatura.value)) {
			document.getElementById("temperaturaR").innerHTML="Solo acepta maximo 10 caracteres";
			temperatura.focus();
			return false;
		}else{
			document.getElementById("temperaturaR").innerHTML="";
			return true;
		}
}
function validarPeso(){
	var exPeso=/^[0-9.a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{1,10}$/;
	var peso=document.getElementById("peso");

		if (!peso.value) {
			document.getElementById("pesoR").innerHTML="El campo peso es requerido";
			peso.focus();
			return false;

		}
		else if (!exPeso.exec(peso.value)) {
			document.getElementById("pesoR").innerHTML="Solo acepta maximo 10 caracteres numericos";
			peso.focus();
			return false;
		}else{
			document.getElementById("pesoR").innerHTML="";
			return true;
		}
}

function validarEntero(){
		var entero=document.getElementById("entero"); 

		if (!entero.value || entero.value==0) {
			document.getElementById("enteroR").innerHTML="Seleccione uno";
			entero.focus();
			return false;	
		}else{
			document.getElementById("enteroR").innerHTML="";
			return true;
		}
}

function validarVacunas(){
	var vacunas=document.getElementById("vacuna"); 
	var exVacunas=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{1,45}$/; 
	if (!vacunas.value) {
			document.getElementById("vacunaR").innerHTML="El campo vacuna es requerido";
			vacunas.focus();
			return false;
	}
	else if (!exVacunas.test(vacunas.value)) {
		document.getElementById("vacunaR").innerHTML="maximo acepta 45 letras";
		vacunas.focus();
		return false;	
	}
	else {
		document.getElementById("vacunaR").innerHTML="";
		return true;
	}
}

function validarAlimentacion(){
	var alimentacion=document.getElementById("alimenta"); 
	var exAlimenta=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{1,45}$/; 
	if (!alimentacion.value) {
			document.getElementById("alimentacionR").innerHTML="El campo alimentación es requerido";
			alimentacion.focus();
			return false;
	}
	else if (!exAlimenta.test(alimentacion.value)) {
		document.getElementById("alimentacionR").innerHTML="maximo acepta 45 letras";
		alimentacion.focus();
		return false;	
	}
	else {
		document.getElementById("alimentacionR").innerHTML="";
		return true;
	}
}

function validarDesparacitacion(){
	var desparacitacion=document.getElementById("despara"); 
	var exDespara=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{1,45}$/; 
	if (!desparacitacion.value) {
			document.getElementById("desparacitacionR").innerHTML="El campo desparacitación es requerido";
			desparacitacion.focus();
			return false;
	}
	else if (!exDespara.test(desparacitacion.value)) {
		document.getElementById("desparacitacionR").innerHTML="maximo acepta 45 letras";
		desparacitacion.focus();
		return false;	
	}
	else {
		document.getElementById("desparacitacionR").innerHTML="";
		return true;
	}
}

function validarAnamnesico(){
	var anamnesico=document.getElementById("anamnesico"); 
	var exAnamnesico=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]+$/; 
	if (!anamnesico.value) {
			document.getElementById("anamnesicoR").innerHTML="El campo anamnesico es requerido";
			anamnesico.focus();
			return false;
	}
	else if (!exAnamnesico.test(anamnesico.value)) {
		document.getElementById("anamnesicoR").innerHTML="El campo anamnesico solo acepta letras";
		anamnesico.focus();
		return false;	
	}
	else {
		document.getElementById("anamnesicoR").innerHTML="";
		return true;
	}
}

function validarDiagnostico(){
	var diagnostico=document.getElementById("diagnostico"); 
	var exDiagnostico=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]+$/; 
	if (!diagnostico.value) {
			document.getElementById("diagnosticoR").innerHTML="El campo diagnostico es requerido";
			diagnostico.focus();
			return false;
	}
	else if (!exDiagnostico.test(diagnostico.value)) {
		document.getElementById("diagnosticoR").innerHTML="El campo diagnostico solo acepta letras";
		diagnostico.focus();
		return false;	
	}
	else {
		document.getElementById("diagnosticoR").innerHTML="";
		return true;
	}
}
function validarChequeo() {
	if (validarFecha()&&validarFc()&&validarFr()&&validarTllc()&&validarTemperatura()&&validarPeso()&&validarEntero()
		&&validarVacunas()&&validarAlimentacion()&&validarDesparacitacion()&&validarAnamnesico()&&validarDiagnostico()) {

			alert("El formulario se ha enviado Exitosamente");
			document.chequeo.submit(); 	
	}	
}
window.onload= function()
{
	var jenviar;
	jenviar= document.chequeo.enviarChequeo;
	jenviar.onclick = validarChequeo;
}
