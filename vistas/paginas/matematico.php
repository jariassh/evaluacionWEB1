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
								echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-exclamation'></i></span>Error:</h2>
										</div>
										<div class='card-body'>
											<p class='card-text'>Olvidaste agregar los numeros a operar. </p>
										</div>
										<div class='card-footer'>
											<small>ERROR</small>
										</div>
									</div>";
							}elseif($numero1 == "" || $numero2 ==""){
								echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-exclamation'></i></span>Error:</h2>
										</div>
										<div class='card-body'>
											<p class='card-text'>Te falt&oacute; agregar uno de los dos n&uacute;meros. </p>
										</div>
										<div class='card-footer'>
											<small>ERROR</small>
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
									echo "<div class='card' id='cardResultMatematico'>
										<div class='card-header'>
											<h2><span class='pr-2'><i class='fas fa-exclamation'></i></span>Error:</h2>
										</div>
										<div class='card-body'>
											<p class='card-text'>Tengo los n&uacute;meros a operar, pero no encuentro la operaci&oacute;n a realizar. </p>
										</div>
										<div class='card-footer'>
											<small>ERROR</small>
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
