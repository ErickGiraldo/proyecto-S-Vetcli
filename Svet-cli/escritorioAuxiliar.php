<?php 
session_start();
if ($_SESSION['sesion']==0){
header('location: index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Svet-cli</title>
        <meta name="description" content="Circle Hover Effects with CSS Transitions" />
        <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/menuA.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="../js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
  <link rel="stylesheet" type="text/css" href="css/SUBnormalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/SUBdemo.css" />
		<link rel="stylesheet" type="text/css" href="../css/SUBcomponent2.css" />
		<script src="../js/SUBmodernizr-2.6.2.min.js"></script>

<!-- sub demo -->
		<link rel="stylesheet" type="text/css" href="../css/SUBnormalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/SUBdemo.css" />
		<link rel="stylesheet" type="text/css" href="../css/SUBcomponent2.css" />
		<script src="../js/SUBmodernizr-2.6.2.min.js"></script>

<!-- boton cambiar contraseña -->

       <link rel="stylesheet" type="text/css" href="../css/Bdefault.css" />
		<link rel="stylesheet" type="text/css" href="../css/Bcomponent.css" />
		<script src="../js/Bmodernizr.custom.js"></script>
		<script src="../js/modificarContraseña.js"></script>

  
  
    </head>
    <body>

    <style> 
body{
    background-image:url("../imagenes/menuA.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
    }

   h1{
   	text-shadow: -1px -1px 1px #fff, 1px 1px 1px #fff, -1px 1px 1px #fff, 1px -1px 1px #fff;
-webkit-text-fill-color: #000;
-webkit-text-stroke: 2px normal;
   }  
    </style>
<BR>


<div  style="right:-74.5%; margin: 5px;">

<div class="dropdown">
        <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > <?php echo "Bienvenido ".$_SESSION['username'];;?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu" style="background: silver">
          <li><a ><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Cambiar contraseña</button></a></li>
        </ul>
        <a href="cerrarSesion.php"><button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-off"> </span></button></a> 
        </div>

      </div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Restauración de contraseña</h4>
        </div>
        <div class="modal-body"> 
        <form action="actualizarClave.php" method="POST" name="contacto_frm">           

        <!-- Text input Contraseña-->
            <div class="form-group">
              <label class="col-md-4 control-label">Nueva contraseña</label> 
                <div class="input-group"> 
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
              <input type="password" class="form-control" placeholder="Password" name="clave" id="clave" onkeyup="validarContrasena();">
                </div>
              </div> 

            <!-- Text input Repita Contraseña-->
            <div class="form-group">
              <label class="col-md-4 control-label">Confirme contraseña</label> 
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
              <input type="password" class="form-control" placeholder="Password" id="reClave" onkeyup="validarContrasena();">
                </div>
              </div> <p id="reClaver" style="color: red;"></p>
            </div>
        
        <div class="modal-footer">
         <button type="button" class="btn btn-info" data-dismiss="modal" name="bEnviar">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>






    <div class="col-md-12 col-md-offset-0">  
    <div>
        <h2  class="well well-sm" style="background-color: #000; text-align: center; border: none;"><font size="10" face="Cooper Black" color="#fff">Escritorio Auxiliar</font></h2>
    </div>
    </div>
				
			<section class="main">
			<div class="container">	
				<ul class="ch-grid">
					<li>
						 <h1><font size="5" color="#000000" face="Cooper Black"><center>Nueva Historia Clinica</center></font></h1>
						<div class="ch-item">	
							<div class="ch-info">
								<h3><font size="4" color="#000000" face="Cooper Black"><center>Nueva Historia Clinica</center></font></h3>
								<p><a href="datosPrincipales.php">Ver</a></p>
							</div>
							<div class="ch-thumb ch-img-1"></div>
						</div>
					</li>
					<li>
					 <h1><font size="5" color="#000000" face="Cooper Black"><center>Agregar Mascota</center></font></h1>
						<div class="ch-item">
							<div class="ch-info">
								<h3><font size="4" color="#000000" face="Cooper Black"><center>Agregar Mascota</center></font></h3>
								<p><a href="agregarMascota.php">Ver</a></p>
							</div>
							<div class="ch-thumb ch-img-2"></div>
						</div>
					</li>
					<li>
					<h1><font size="5" color="#000000" face="Cooper Black"><center>Especies</center></font></h1>
						<div class="ch-item">	
							<div class="ch-info">
								<h3><font size="4" color="#000000" face="Cooper Black"><center>Especie</center></font></h3>
								<p><a href="tablaEspecie.php">Ver</a></p>
							</div>
							<div class="ch-thumb ch-img-3"></div>
						</div>
					</li>
					<li>
					<h1><font size="5" color="#000000" face="Cooper Black"><center>Razas</center></font></h1>
						<div class="ch-item">	
							<div class="ch-info">
								<h3><font size="4" color="#000000" face="Cooper Black"><center>Razas</center></font></h3>
								<p><a href="tablaRaza.php">Ver</a></p>
							</div>
							<div class="ch-thumb ch-img-4"></div>
						</div>
					</li>
					<li>
					<h1><font size="5" color="#000000" face="Cooper Black"><center>Ver Historia Clínica</center></font></h1>
						<div class="ch-item">
							<div class="ch-info">
								<h3><font size="4" color="#000000" face="Cooper Black"><center>Ver Historia Clínica</center></font></h3>
								<p><a href="consultarHistoria.php">Ver</a></p>
							</div>
							<div class="ch-thumb ch-img-5"></div>
						</div>
					</li>
				</ul>
				 </div>
			</section>

			<br><br><br>

			<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>


<!--	</head>
	<body>
	<div class="hi-icon-wrap hi-icon-effect-6">
					<a href="#myModal" class="hi-icon hi-icon-cog">Settings</a>
				</div>
			
		</div> /container 
		<script>
			var hash = window.location.hash,
				current = 0,
				demos = Array.prototype.slice.call( document.querySelectorAll( '#codrops-demos > a' ) );
			
			if( hash === '' ) hash = '#set-1';
			setDemo( demos[ parseInt( hash.match(/#set-(\d+)/)[1] ) - 1 ] );

			demos.forEach( function( el, i ) {
				el.addEventListener( 'click', function() { setDemo( this ); } );
			} );

			function setDemo( el ) {
				var idx = demos.indexOf( el );
				if( current !== idx ) {
					var currentDemo = demos[ current ];
					currentDemo.className = currentDemo.className.replace(new RegExp("(^|\\s+)" + 'current-demo' + "(\\s+|$)"), ' ');
				}
				current = idx;
				el.className = 'current-demo'; 
			}
		</script>
		<div class="container">
			-->
			</header>
			<div class="component">
				<h2><font face="Cooper Black"><center>Svet-cli</center></font></h2>
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">Sub Menú</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li></li>
						<li></li>
						<li><a href="#"><span>Manual</span></a></li>
						<li><a href="AdministracionA.php"><span>Reportes</span></a></li>
						<li><a href="Svet-cliA.php"><span>Svet-cli</span></a></li>
						<li></li>s
						<li></li><
					 </ul>
				</div>
				<!-- End of Nav Structure -->
			</div>
		
		</div><!-- /container -->

		<script src="../js/SUBpolyfills.js"></script>
		<script src="../js/SUBdemo2.js"></script>

		
    </body>
</html>