$(document).ready(function(){
  
  $("#password").focusin(function(){
    $(this).addClass("miClase");
  });

  $("password").focusout(function(){
   if ($(this).val().length > 0 && $(this).val().length <=3) {
       $("#id3").html("<span style='color:#ba1c2e;'> Contraseña muy corta </span>");

   }else if($(this).val().length > 3 && $(this).val().length <=8){
   	$("#id3").html("<span style='color=green;'> contraseña valida </span>");
   }
   else{
   	$("#id3").html("<span style: 'color:red;'>Error contraseña muy corta </span");
   }

  });
});