function validarContrasena()
{
	var clave=document.getElementById("clave");
	var rclave=document.getElementById("reClave"); 

 		if (!clave.value && !rclave.value) {
			document.getElementById("reClaver").innerHTML="Los campos contraseñas son requeridos";
			clave.focus();
			return false;	
		} 
		else if (clave.value != rclave.value) {
			document.getElementById("reClaver").innerHTML="Las claves no coinciden";
			return false;	
		}else{
		document.getElementById('reClaver').innerHTML="";
		return true;	
	}
}
function modificarContra() {
	if (validarContrasena()) { 
			document.contacto_frm.submit(); 	
	}	
}
window.onload= function()
{
	var jenviar;
	jenviar= document.contacto_frm.bEnviar;
	jenviar.onclick = modificarContra;
}