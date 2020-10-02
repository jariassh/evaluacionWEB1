<div class="row">
	<div id="centraContenidoMatematico">
		<div class="col-12 col-md-7 col-lg-7 col-xl-7 mt-4" id="contenidoMatematico1">
			<div class="row justify-content-center">
				<div class="px-4 col-xl-7" id="enuciadoMatematico">
					<p>Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicaci&oacute;n, de dos números enteros almacenados en 2, variables diferentes (utilice formularios HTML).</p>
				</div>
			</div>
			<div class="row" id="contentFormMatematico">
				<div class="col-12 col-md-4" id="formularioMatematico">
					<form class="p-sm-5 bg-light" name="formMatematico" method="post" action="matematico">
						<label for="numero1">Numero 1:</label>
						<input type="text" class="form-control" placeholder="Ingrese un numero" name="numero1" autocomplete="off">
						<label for="numero2">Numero 2:</label>
						<input type="text" class="form-control" placeholder="Ingrese un numero" name="numero2" autocomplete="off">
						<label for="operacion">Operaci&oacute;n</label>
						<select class="form-control" name ="operacion">
		                  <option value="seleccione"> --- Seleccione --- </option>
		                  <option value="Sumar">Sumar</option>
		                  <option value="Restar">Restar</option>
		                  <option value="Multiplicar">Multiplicar</option>	                              
		                </select>
						<button type="submit" class="btn btn-warning">Calcular</button>
					</form>
				</div>				
			</div>
		</div>
		<div class="col-12 col-md-5 col-lg-3 col-xl-3" id="contenidoMatematico2">
			<div class="" id="contentCardMartematico">
				<div>
					<?php 
						if ($_POST) {							

							$numero1 = $_POST["numero1"];
							$numero2 = $_POST["numero2"];
							$opt = $_POST["operacion"];

							if ($numero1 == "" && $numero2 =="") {
								echo "<script>
								            Swal.fire({
								              padding: '1rem',	              
								              timerProgressBar: true,
								              backdrop: true, 
								              toast: false,
								              position: 'top',
											  icon: 'error',
											  text: 'El formulario está vacío.!',
											  showConfirmButton: false,
											  timer: 3500
								              })            
				    				 </script>";
								echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-lightbulb'></i></span>Resultado:</h2>
										</div>
										<div class='card-body'>
											<h1 class='card-title' style='font-size: 60px;'>0</h1>
										</div>
										<div class='card-footer'>
											<p>Operaci&oacute;n realizada: <b>Ninguna</b></p>
										</div>
									</div>";
							}elseif($numero1 == "" || $numero2 ==""){
								echo "<script>
								            Swal.fire({
								              padding: '1rem',	              
								              timerProgressBar: true,
								              backdrop: true, 
								              toast: false,
								              position: 'top',
											  icon: 'warning',
											  text: 'Uno de los campos está vacío.!',
											  showConfirmButton: false,
											  timer: 3500
								              })            
				    				 </script>";
								echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-lightbulb'></i></span>Resultado:</h2>
										</div>
										<div class='card-body'>
											<h1 class='card-title' style='font-size: 60px;'>0</h1>
										</div>
										<div class='card-footer'>
											<p>Operaci&oacute;n realizada: <b>Ninguna</b></p>
										</div>
									</div>";
							}else {

								if ($opt != "seleccione") {

									echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-lightbulb'></i></span>Resultado:</h2>
										</div>
										<div class='card-body'>
											<h1 class='card-title' style='font-size: 60px;'>".operaciones($numero1, $numero2, $opt)."</h1>
										</div>
										<div class='card-footer'>
											<p>Operaci&oacute;n realizada: <b>".$opt."</b></p>
										</div>
									</div>";
								}else {
									echo "<script>
								            Swal.fire({
								              padding: '1rem',	              
								              timerProgressBar: true,
								              backdrop: true, 
								              toast: false,
								              position: 'top',
											  icon: 'info',
											  text: 'Te faltó elergir la operación a realizar.',
											  showConfirmButton: false,
											  timer: 3500
								              })            
				    				 </script>";
								echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-lightbulb'></i></span>Resultado:</h2>
										</div>
										<div class='card-body'>
											<h1 class='card-title' style='font-size: 60px;'>0</h1>
										</div>
										<div class='card-footer'>
											<p>Operaci&oacute;n realizada: <b>Ninguna</b></p>
										</div>
									</div>";
								}
							}
						}else{
							echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-lightbulb'></i></span>Resultado:</h2>
										</div>
										<div class='card-body'>
											<h1 class='card-title' style='font-size: 60px;'>0</h1>
										</div>
										<div class='card-footer'>
											<p>Operaci&oacute;n realizada: <b>Ninguna</b></p>
										</div>
									</div>";
						}

					?>					
				</div>
			</div>
		</div>
	</div>
</div>
