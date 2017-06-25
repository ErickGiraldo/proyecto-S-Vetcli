<?php 
if ($_SESSION['sesion']==0){
header('location: escritorioVeterinario.php');
} ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Reportes</title>
		<meta name="description" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/normalizeAD.css" />
		<link rel="stylesheet" type="text/css" href="../css/demoAD.css" />
		<link rel="stylesheet" type="text/css" href="../css/bookAD.css" />
		

		<script src="js/modernizr.customAD.js"></script>

	</head>
	<body>
	<style> 
body{
    background-image:url("../imagenes/index.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
    color: #000;
    }
    </style>

		<div class="container" >
			<!-- Top Navigation --> 
			
			<div class="codrops-top clearfix">
			<a class="codrops-icon codrops-icon-prev" href="escritorioVeterinario.php"><span><font size="3" face="Cooper Black"> Regresar</font></span></a>
				
			</div>
			
			<header>
				<h1><font size="10" face="Cooper Black" >Modulo de Administración</font><span>Reportes de Información en el Sistema</span></h1>	
				
			</header>
			<div class="component">

				<ul class="align">
					<li>
						<figure class='book'>

							<!-- Front -->

							<ul class='hardcover_front'>
								<li><span class="ribbon">Nº1</span>
									<img src="../imagenes/usuario.jpg" alt="" width="100%" height="100%">
								</li>
								<li>
									
								</li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="ReporteUsuarios.php">Descargar</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1><font size="6" face="Cooper Black" >Usuarios en el Sistema</font></h1>
								<span>Svet-cli</span>
								<p align="justify">En este reporte encontrara el listado de los usuarios registrados en el sistema con sus respectivos datos y rol que ocupa en el sistema.</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class='book'>

							<!-- Front -->

							<ul class='hardcover_front'>
								<li><span class="ribbon">Nº2</span>
									<img src="../imagenes/Propietario.jpg" alt="" width="100%" height="100%">
								</li>
								<li>
									
								</li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="reportePropietario.php">Descargar</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1><font size="6" face="Cooper Black" >Propietarios de Pacientes en el Sistema</font></h1>
								<span>Svet-cli</span>
								<p align="justify">En este reporte encontrara el listado de los Propietarios de pacientes que cuentan con una historia clinica registrada en el sistema con sus respectivos datos.</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class='book'>

						<!-- Front -->

							<ul class='hardcover_front'>
								<li><span class="ribbon">Nº3</span>
									<img src="../imagenes/Pacientes.jpg" alt="" width="100%" height="100%">
								</li>
								<li>
									
								</li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="reporte.php">Descargar</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1><font size="6" face="Cooper Black">Pacientes registrados en el ultimo mes</font></h1>
								<span>Svet-cli</span>
								<p align="justify">En este reporte encontrara el listado de los Pacientes a los cuales se les registro una historia clinica en el sistema en el transcurso del ultimo mes.</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class='book'>

						<!-- Front -->

							<ul class='hardcover_front'>
								<li><span class="ribbon">Nº4</span>
									<img src="../imagenes/Razas.jpg" alt="" width="100%" height="100%">
								</li>
								<li>
									
								</li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="reporteRaza.php">Descargar</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption >
								<h1><font size="6" face="Cooper Black">Razas y Especies en Tratamiento</font></h1>
								<span>Svet-cli</span>
								<p align="justify">En este reporte encontrara el listado de las Razas y Especies de Pacientes en tratamiento a los cuales se les registro una historia clinica en el sistema.</p>
							</figcaption>
						</figure>
					</li>
				</ul>
			<div class="codrops-top clearfix">
			<a class="codrops-icon codrops-icon-prev" href="escritorioVeterinario.php"><span><font size="3" face="Cooper Black"> Regresar</font></span></a>
				
			</div>
			</div>
			
		</div><!-- /container -->
	</body>
</html>