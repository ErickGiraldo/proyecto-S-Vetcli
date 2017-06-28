function registro(){
var nombre= document.getElementById('nombre').value;
var usu=document.getElementById('usuario').value;
var contra= document.getElementById('clave').value;
var reContra=document.getElementById('reClave').value;
var rol=document.getElementById('rol').value;
var tel=document.getElementById('tel').value;
var cel=document.getElementById('cel').value;
var correo= document.getElementById('corre').value;

if (nombre=="") {
    document.getElementById('nombre').innerHTML="Complete el campo Nombre";
    document.getElementById('nombre').focus();
    }else{
    	if (usu=="") {
    		document.getElementById('usuario').innerHTML="Complete el campo Usuario";
    		document.getElementById('usuario').focus();
    	}
    }
}