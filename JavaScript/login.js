function login(){
	var confirmar=true;
	var user= document.getElementById('usuario');
	var cla= document.getElementById('clave');

	if (!user.value || !cla.value) {
		document.getElementById('login1').innerHTML="Los campos son requeridos";
		confirmar=false;
	}else{
		document.getElementById('login1').innerHTML="";
	}
}

function enviar(){
		login();
		if (confirmar) {
			document.ingreso.submit(); 	
		}

} 