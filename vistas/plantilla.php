<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TALLER EVALUACION | WEB 1 | CESDE</title>

	<!-- Website Favicons -->
	<link rel="icon" type="image/png" href="vistas/img/icon.png" sizes="16x16">
	<link rel="icon" type="image/png" href="vistas/img/icon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="vistas/img/icon.png" sizes="64x64">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<!-- Fonts Google -->
	<link href="https://fonts.googleapis.com/css2?family=Kite+One&family=Berkshire+Swash&display=swap" rel="stylesheet">

	<!-- CSS Styles -->
	<link rel="stylesheet" href="vistas/css/estilos.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- Latest FontAwesom version -->
	<script src="https://kit.fontawesome.com/29f215aa7a.js" crossorigin="anonymous"></script>
</head>
<body>

<!--==========================
	=            LOGO            =
	===========================-->
	<div class="container-fluid" id="cabecera">
		<div class="row justify-content-center">
			<div class="col-10">			
				<a href="#">
					<img class="mx-auto d-block py-4" src="vistas/img/logo.png">
				</a>				
			</div>
			<div class="col-2 mt-3" id="salir">			
				<a href="#" class="btn btn-light">Cerrar Sesión</a>					
			</div>			
		</div>		
	</div>

	<!--==============================
	=            BOTONERA            =
	===============================-->
	<div class="container-fluid bg-light">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">

				<?php if (isset($_GET["pagina"])): ?>

					<?php if ($_GET["pagina"] == "inicio"): ?>
						<li class="nav-item">
							<a href="inicio" class="nav-link font-weight-bold active">Inicio</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="inicio" class="nav-link font-weight-bold">Inicio</a>
						</li>
					<?php endif ?>

					<?php if($_GET["pagina"] == "matematico"): ?>
						<li class="nav-item">
							<a href="matematico" class="nav-link font-weight-bold active">Matemático</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="matematico" class="nav-link font-weight-bold">Matemático</a>
						</li>
					<?php endif ?>

					<?php if($_GET["pagina"] == "gimnasio-bodytech"): ?>
						<li class="nav-item">
							<a href="gimnasio-bodytech" class="nav-link font-weight-bold active">Gimnasio Bodytech</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="gimnasio-bodytech" class="nav-link font-weight-bold">Gimnasio Bodytech</a>
						</li>
					<?php endif ?>

					<?php if($_GET["pagina"] == "spring-step"): ?>
						<li class="nav-item">
							<a href="spring-step" class="nav-link font-weight-bold active">Spring Step</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="spring-step" class="nav-link font-weight-bold">Spring Step</a>
						</li>
					<?php endif ?>

					<?php if($_GET["pagina"] == "postobon"): ?>
						<li class="nav-item">
							<a href="postobon" class="nav-link font-weight-bold active">Postobón</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="postobon" class="nav-link font-weight-bold">Postobón</a>
						</li>
					<?php endif ?>

				<?php else: ?>
				<li class="nav-item">
					<a href="inicio" class="nav-link font-weight-bold">Inicio</a>
				</li>
				<li class="nav-item">
					<a href="matematico" class="nav-link font-weight-bold">Matemático</a>
				</li>
				<li class="nav-item">
					<a href="gimnasio-bodytech" class="nav-link font-weight-bold">Gimnasio Bodytech</a>
				</li>
				<li class="nav-item">
					<a href="spring-step" class="nav-link font-weight-bold">Spring Step</a>
				</li>
				<li class="nav-item">
					<a href="postobon" class="nav-link font-weight-bold">Postobón</a>
				</li>
				<?php endif ?>

				<li class="nav-item" id="menu">
					<a class="nav-link font-weight-bold">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!--==============================
	=   BOTONERA MENU OCULTA       =
	===============================-->
	<div class="container-fluid bg-light" id="menuOculto">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Bancolombia</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Numeros Pares</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Frutas</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Selección FCF</a>
				</li>
			</ul>
		</div>
	</div>
	<!--===============================
	=            CONTENIDO            =
	================================-->
	<div class="container-fluid">
		<div class="container">
			<?php

			if(isset($_GET["pagina"])) {

				if($_GET["pagina"]=="inicio" ||
				$_GET["pagina"] == "matematico" ||
				$_GET["pagina"] == "gimnasio-bodytech" ||
				$_GET["pagina"] == "spring-step" ||
				$_GET["pagina"] == "postobon") {

					include "paginas/".$_GET["pagina"].".php";
				} else {

					include "paginas/error404.php";
				}

			}else {
				include "paginas/inicio.php";
			}

			?>			
		</div>
	</div>

<footer class="text-center py-4">
	<h6 class="font-weight-bold">Copyright &copy 2020-2</h6>
</footer>

	<!-- JS Script -->
	<script src="vistas/js/script.js"></script>

</body>
</html>