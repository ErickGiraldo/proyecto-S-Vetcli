$(document).ready(function(){
  $('.menu li:has(ul)').click(function(e){
  	e.prevenDefault();

  	if ($(this).hasClass('activado')){

  	}else{
  		$('.menu li ul').slideUp();
  		$('.menu li').removeClass('activado');
  		$(this).addClass('activado');
  		$(this).children('ul').slideDown():
  	}
  });
});