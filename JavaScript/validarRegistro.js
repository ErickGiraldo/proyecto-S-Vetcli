function validarForm() {
	var confirmar=true;
	var exNombre=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]+$/;
	var exEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

	var formulario=document.getElementById("contacto-frm");
	var nombre=document.getElementById("nombre");	
	var usuario=document.getElementById("usuario");
	var clave=document.getElementById("clave");
	var rclave=document.getElementById("reClave");
	var rol=document.getElementById("rol"); 
	var tel=document.getElementById("tel");
	var cel=document.getElementById("cel"); 
	var email=document.getElementById("email"); 

		if (!nombre.value) {
			document.getElementById("nombrer").innerHTML="El campo nombre es requerido";
			nombre.focus();
			confirmar= false;

		}
		else if (!exNombre.exec(nombre.value)) {
			document.getElementById("nombrer").innerHTML="El campo nombre solo acepta letras";
			nombre.focus();
			confirmar= false;
		}
        else if (!usuario.value) {
			document.getElementById("usuarior").innerHTML="El campo usuario es requerido";
			usuario.focus();
			confirmar= false;

		}
		else if (!exNombre.exec(usuario.value)) {
			document.getElementById("nombrer").innerHTML="El campo nombre solo acepta letras";
			usuario.focus();
			confirmar= false;
		} 
		else if (usuario.value.length > 20) {
			document.getElementById("usuarior").innerHTML="El campo usuario minimo debe tener 20 caracteres";
			
			confirmar= false;
		}
		else if (!clave.value) {
			document.getElementById("claver").innerHTML="El campo clave es requerido";
			clave.focus();
			confirmar= false;	
		} 
		else if (clave.value != rclave.value) {

			document.getElementById("reClaver").innerHTML="Las claves no coinciden";
			rclave.focus();
			confirmar= false;	
		}
		else if (!rol.value || rol.value==0) {
			document.getElementById("rolr").innerHTML="Seleccione un rol";
			rol.focus();
			confirmar= false;	
		}
		else if (!tel.value) {

			document.getElementById("telr").innerHTML="El campo télefono es requerido";
			tel.focus();
			confirmar= false;

		}
		else if (isNaN(tel.value)) {
			document.getElementById("telr").innerHTML="El campo télefono solo acepta numeros";
			tel.focus();
			confirmar= false;
		}
		else if (!cel.value) {

			document.getElementById("celr").innerHTML="El campo celular es requerido";
			cel.focus();
			confirmar= false;

		}
		else if (isNaN(cel.value)) {
			document.getElementById("celr").innerHTML="El campo celular solo acepta numeros";
			cel.focus();
			confirmar= false;
		}
		else if (!email.value) {

			document.getElementById("emailr").innerHTML="El campo email es requerido";
			email.focus();
			confirmar= false;
		}
		else if (!exEmail.exec(email.value)) {
			document.getElementById("emailr").innerHTML="El campo Email no es valido";
			email.focus();
			confirmar= false;
		} 


		if (confirmar) {
			alert("El formulario se ha enviado Exitosamente");
			document.contacto_frm.submit(); 	
		}

		
}

window.onload= function()
{
	var jenviar;
	jenviar= document.contacto_frm.bEnviar;
	jenviar.onclick = validarForm;
}


function contrasena()
{
var a=document.forms.contacto_frm.clave.value;
var b=document.forms.contacto_frm.clave1.value;
	
	if (a !=b) {
			document.getElementById('reClaver').innerHTML="las contraseñas no coinciden";
	}else{
	document.getElementById('reClaver').innerHTML="";	
	}
}

function nombre()
{
var exp=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{10,50}+$/;
var n=document.forms.contacto_frm.nombreUsu.value;

		if (!n.value) {
			document.getElementById("nombrer").innerHTML="El campo nombre es requerido";
		}
		else if (!exp.exec(n.value)) {
			document.getElementById("nombrer").innerHTML="El campo nombre solo acepta letras";

		}else if (n.value.length > 50) {
			document.getElementById("nombrer").innerHTML="El campo nombre maximo debe tener 50 caracteres";
		}else if(n.value.length < 6){
		document.getElementById("nombrer").innerHTML="El campo nombre minimo debe tener 10 caracteres";
		} else{
			document.getElementById("nombrer").innerHTML="";
		}
}

function Usuario(){
	var ex=/^[a-zA-ZáćéįóúÿýżźñÉÓÚÑ\s]{3,20}$/;
	var v=document.forms.contacto_frm.usuario.value;
	if (!usuario.value) {
			document.getElementById("usuarior").innerHTML="El campo usuario es requerido"; 
 	    }
 	    else if (usuario.value.length > 20) {
			document.getElementById("usuarior").innerHTML="El campo usuario minimo debe tener 20 caracteres";
		}
		else if (!ex.exec(usuario.value)) {
			document.getElementById("usuarior").innerHTML="El campo usuario solo acepta letras";
		}
		else{
			document.getElementById("usuarior").innerHTML="";
		}
}