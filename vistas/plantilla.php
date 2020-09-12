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
	<link rel="stylesheet" href="vistas/css/resoluciones.css">
</head>
<body>

<!--==========================
	=            LOGO            =
	===========================-->
	<div class="container-fluid" id="cabecera">
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="#">
					<img class="mx-auto d-block py-4" src="vistas/img/logo.png">
				</a>
			</div>
		</div>
	</div>

	<!--==============================
	=            BOTONERA >=LG           =
	===============================-->
	<div class="container-fluid bg-light d-none d-lg-block">
		<div class="container">
			<nav class="navbar navbar-light bg-light navbar-expand-md d-flex justify-content-end">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01">
					<div class="navbar-nav w-100 d-flex justify-content-between" id="menu">
						<?php if (isset($_GET["pagina"])): ?>
							<?php if ($_GET["pagina"] == "inicio"): ?>
								<a class="nav-item nav-link btn btn-light btnMenuActive" href="inicio"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-home"></i></span>Inicio</a>
								<?php else: ?>
									<a class="nav-item nav-link btn btn-light" href="inicio"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-home"></i></span>Inicio</a>
								<?php endif?>
								<?php if ($_GET["pagina"] == "matematico"): ?>
									<a class="nav-item nav-link btn btn-light btnMenuActive" href="matematico"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-calculator"></i></span>Matemático</a>
									<?php else: ?>
										<a class="nav-item nav-link btn btn-light" href="matematico"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-calculator"></i></span>Matemático</a>
									<?php endif?>
									<?php if ($_GET["pagina"] == "gimnasio-bodytech"): ?>
										<a class="nav-item nav-link btn btn-light btnMenuActive" href="gimnasio-bodytech"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-dumbbell"></i></span>Gimnasio</a>
										<?php else: ?>
											<a class="nav-item nav-link btn btn-light" href="gimnasio-bodytech"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-dumbbell"></i></span>Gimnasio</a>
										<?php endif?>
										<?php if ($_GET["pagina"] == "spring-step"): ?>
											<a class="nav-item nav-link btn btn-light btnMenuActive" href="spring-step"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-cart-plus"></i></span>Spring Step</a>
											<?php else: ?>
												<a class="nav-item nav-link btn btn-light" href="spring-step"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-cart-plus"></i></span>Spring Step</a>
											<?php endif?>
											<?php if ($_GET["pagina"] == "postobon"): ?>
												<a class="nav-item nav-link btn btn-light btnMenuActive" href="postobon"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-industry"></i></span>Postobón</a>
												<?php else: ?>
													<a class="nav-item nav-link btn btn-light" href="postobon"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-industry"></i></span>Postobón</a>
												<?php endif?>
												<?php if ($_GET["pagina"] == "bancolombia"): ?>
													<a class="nav-item nav-link btn btn-light btnMenuActive" href="bancolombia"><span class="d-md-block d-lg-inline pr-1"><i class="fas fa-money-check-alt"></i></span>Bancolombia</a>
													<?php else: ?>
														<a class="nav-item nav-link btn btn-light" href="bancolombia"><span class="d-md-block d-lg-inline pr-1"><i class="fas fa-money-check-alt"></i></span>Bancolombia</a>
													<?php endif?>
													<?php if ($_GET["pagina"] == "salir"): ?>
														<a class="nav-item nav-link btn btn-light" href="#"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-door-open"></i></span>Cerrar Sesión</a>
														<?php else: ?>
															<a class="nav-item nav-link btn btn-light" href="#"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-door-open"></i></span>Cerrar Sesión</a>
														<?php endif?>
														<?php else: ?>
															<a class="nav-item nav-link btn btn-light" href="inicio"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-home"></i></span>Inicio</a>
															<a class="nav-item nav-link btn btn-light" href="matematico"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-calculator"></i></span>Matemático</a>
															<a class="nav-item nav-link btn btn-light" href="gimnasio-bodytech"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-dumbbell"></i></span>Gimnasio</a>
															<a class="nav-item nav-link btn btn-light" href="spring-step"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-cart-plus"></i></span>Spring Step</a>
															<a class="nav-item nav-link btn btn-light" href="postobon"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-industry"></i></span>Postobón</a>
															<a class="nav-item nav-link btn btn-light" href="bancolombia"><span class="d-md-block d-lg-inline pr-1"><i class="fas fa-money-check-alt"></i></span>Bancolombia</a>
															<a class="nav-item nav-link btn btn-light" href="#"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-door-open"></i></span>Cerrar Sesión</a>
														<?php endif?>
													</div>
												</div>
											</nav>
										</div>
									</div>
	<!--==============================
	=            BOTONERA <= MD           =
	===============================-->
	<nav class="d-lg-none d-block navbar navbar-light bg-light navbar-expand-md d-flex justify-content-end">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01">
			<div class="navbar-nav w-100 d-flex justify-content-between" id="menu">
				<?php if (isset($_GET["pagina"])): ?>
					<?php if ($_GET["pagina"] == "inicio"): ?>
						<a class="nav-item nav-link btn btn-light btnMenuActive" href="inicio"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-home"></i></span>Inicio</a>
						<?php else: ?>
							<a class="nav-item nav-link btn btn-light" href="inicio"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-home"></i></span>Inicio</a>
						<?php endif?>
						<?php if ($_GET["pagina"] == "matematico"): ?>
							<a class="nav-item nav-link btn btn-light btnMenuActive" href="matematico"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-calculator"></i></span>Matemático</a>
							<?php else: ?>
								<a class="nav-item nav-link btn btn-light" href="matematico"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-calculator"></i></span>Matemático</a>
							<?php endif?>
							<?php if ($_GET["pagina"] == "gimnasio-bodytech"): ?>
								<a class="nav-item nav-link btn btn-light btnMenuActive" href="gimnasio-bodytech"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-dumbbell"></i></span>Gimnasio</a>
								<?php else: ?>
									<a class="nav-item nav-link btn btn-light" href="gimnasio-bodytech"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-dumbbell"></i></span>Gimnasio</a>
								<?php endif?>
								<?php if ($_GET["pagina"] == "spring-step"): ?>
									<a class="nav-item nav-link btn btn-light btnMenuActive" href="spring-step"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-cart-plus"></i></span>Spring Step</a>
									<?php else: ?>
										<a class="nav-item nav-link btn btn-light" href="spring-step"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-cart-plus"></i></span>Spring Step</a>
									<?php endif?>
									<?php if ($_GET["pagina"] == "postobon"): ?>
										<a class="nav-item nav-link btn btn-light btnMenuActive" href="postobon"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-industry"></i></span>Postobón</a>
										<?php else: ?>
											<a class="nav-item nav-link btn btn-light" href="postobon"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-industry"></i></span>Postobón</a>
										<?php endif?>
										<?php if ($_GET["pagina"] == "bancolombia"): ?>
											<a class="nav-item nav-link btn btn-light btnMenuActive" href="bancolombia"><span class="d-md-block d-lg-inline pr-1"><i class="fas fa-money-check-alt"></i></span>Bancolombia</a>
											<?php else: ?>
												<a class="nav-item nav-link btn btn-light" href="bancolombia"><span class="d-md-block d-lg-inline pr-1"><i class="fas fa-money-check-alt"></i></span>Bancolombia</a>
											<?php endif?>
											<?php if ($_GET["pagina"] == "salir"): ?>
												<a class="nav-item nav-link btn btn-light" href="#"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-door-open"></i></span>Cerrar Sesión</a>
												<?php else: ?>
													<a class="nav-item nav-link btn btn-light" href="#"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-door-open"></i></span>Cerrar Sesión</a>
												<?php endif?>
												<?php else: ?>
													<a class="nav-item nav-link btn btn-light" href="inicio"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-home"></i></span>Inicio</a>
													<a class="nav-item nav-link btn btn-light" href="matematico"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-calculator"></i></span>Matemático</a>
													<a class="nav-item nav-link btn btn-light" href="gimnasio-bodytech"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-dumbbell"></i></span>Gimnasio</a>
													<a class="nav-item nav-link btn btn-light" href="spring-step"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-cart-plus"></i></span>Spring Step</a>
													<a class="nav-item nav-link btn btn-light" href="postobon"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-industry"></i></span>Postobón</a>
													<a class="nav-item nav-link btn btn-light" href="bancolombia"><span class="d-md-block d-lg-inline pr-1"><i class="fas fa-money-check-alt"></i></span>Bancolombia</a>
													<a class="nav-item nav-link btn btn-light" href="#"><span class="d-md-block d-lg-inline pr-2"><i class="fas fa-door-open"></i></span>Cerrar Sesión</a>
												<?php endif?>
											</div>
										</div>
									</nav>
	<!--===============================
	=            CONTENIDO            =
	================================-->
	<div class="container-fluid">
		<div class="containerContenido">
			<?php

if (isset($_GET["pagina"])) {

    if ($_GET["pagina"] == "inicio" ||
        $_GET["pagina"] == "matematico" ||
        $_GET["pagina"] == "gimnasio-bodytech" ||
        $_GET["pagina"] == "spring-step" ||
        $_GET["pagina"] == "postobon" ||
        $_GET["pagina"] == "bancolombia") {

        include "paginas/" . $_GET["pagina"] . ".php";
    } else {

        include "paginas/error404.php";
    }

} else {
    include "paginas/inicio.php";
}

?>
	</div>
</div>

<footer class="text-center py-4">
	<h6 class="font-weight-bold">Copyright &copy 2020-2</h6>
</footer>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- Latest FontAwesom version -->
<script src="https://kit.fontawesome.com/29f215aa7a.js" crossorigin="anonymous"></script>

<!-- JS Script -->
<script src="vistas/js/script.js"></script>

<script>document.write('<script src="http://' + ('location.host' || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>