  var v=true;
        $("span.help-block").hide();

function verificar(){

            var v1=0,v2=0,v3=0,V4=0,V5=0,V6=0;
            v1=validacion('nombres');
            v2=validacion('usuario');
            v3=validacion('password');
            v4=validacion('email');
            v5=validacion('celular');
            v6=validacion('rol');
            if (v1===false || v2===false || v3===false || v4==false || v5===false || v6==false) {
                 $("#exito").hide();
                 $("#error").show();
            }else{
                $("#error").hide();
                $("#exito").show();
            }
         }

 function validacion(campo){
            var a=0;
            
            if (campo==='nombres'){
                apellido = document.getElementById(campo).value;
                if( apellido == null || apellido.length == 0 || /^\s+$/.test(apellido) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese su nombre").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='g form-control-feedback'></span>");
                    return true;
                    
                } 
            }
               

               if (campo==='usuario'){
                usuario = document.getElementById(campo).value;
                if( usuario == null || usuario.length == 0 || /^\s+$/.test(usuario) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese un nombre de usuario").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }

               if (campo==='password'){
                password = document.getElementById(campo).value;
                if( password == null || password.length == 0 || /^\s+$/.test(password) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese una contraseña").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group ");
                    $('#'+campo).parent().children('span').hide();
                    return true;
                    
                } 
            }

            if (campo==='email'){
                email = document.getElementById(campo).value;
                if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algun Email").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        
                    return false;
                    
                }
                else{
                    if (!(/\S+@\S+\.\S+/.test(email))) {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Ingrese un Email valido").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }
                    else{
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group ");
                        $('#'+campo).parent().children('span').hide();
                    
                        return true;
                    }
                }
            }

               if (campo==='celular'){
                celular = document.getElementById(campo).value;
                if( celular == null || celular.length == 0 || /^\s+$/.test(celular) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese solo numeros").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                } else {
                    if( isNaN(celular) ) 
                    {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No acepto letras").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;

                    }  else{
                        if (!(/^\d{10}$/.test(celular))) 
                        {
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#'+campo).parent().children('span').text("Debe ingresar solamente 10 digitos").show();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                            return false;
                        }
                        else{
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group");
                            $('#'+campo).parent().children('span').hide();
                    
                            return true;
                        }
                        
                    } 
                  }
               }

             if (campo==='rol') {
               rol= document.getElementById(campo).selectedIndex;
               if (rol == null || rol==0) {
                  $("#rol").parent().parent().attr("class","form-group has-error");
                  return false;
               }
               else{
                  $("#rol").parent().parent().attr("class","form-group")
               }
            }
      }