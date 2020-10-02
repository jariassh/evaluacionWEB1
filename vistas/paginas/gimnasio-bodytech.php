<div class="row">
	<div class="col-sm-12 col-lg-6 col-xl-7 mt-4" id="contenidoGym1">
		<div class="row justify-content-center">
			<div id="enuciadoGym">
				<p>El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en el formula:</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<form action="gimnasio-bodytech" method="post" name="formGymnasio">
			<div>				 
					<table id="imc">						
						<tr>
							<td rowspan="2" class="p-2"> <strong>IMC = </strong></td>
							<td colspan="3" id="peso" style="border-bottom: 2px solid #aaa;">
								<input type="text" name="peso" placeholder="Peso (kg)" class="ml-5 m-1 form-control">
							</td>
						</tr>
						<tr>
							<td><input type="text" name="alturaA" placeholder="Altura (m)" class="mt-2 form-control" id="txtAltura1" autocomplete="off"></td>
							<td><h3>*</h3></td>
							<td><input type="text" name="alturaB" placeholder="Altura (m)" class="mt-2 form-control" id="txtAltura2" readonly="readonly"></td>
						</tr>
					</table>				
			</div>
			<div class="mt-2" id="contentBtnIMC">			
				<button type="submit" class="btn btn-warning" id="btnCalcularIMC">Calcular</button>				
			</div>
			</form>
		</div>
	</div>
	<div class="col-sm-12 col-lg-6 col-xl-5 mt-4">
		<div id="resultadoGym">
			<h3>Resultados:</h3>
		</div>
		<div class="row">
			<?php
				if ($_POST) {

					
					$txtAlturaA = $_POST["alturaA"];
					$txtAlturaB = $_POST["alturaB"];
					$txtPeso = $_POST["peso"];			
					
					
					if ($txtAlturaA == "" && $txtPeso == "") {						
					
			?>		<div class='col-12 col-sm-6 text-center' id='imgIMC'>
							<img src='vistas/img/ningunImc.png' class='rounded'>
						</div>
						<div class='col-12 col-sm-6' id='cardsGym'>
							<div class='card mb-2' id='cardsGym1'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-weight'></i></span>SU PESO (kg)</strong>
							  </div>
							  <div class='card-body'>
							    <p>Faltan Valores a Calcular.</p>
							  </div>
							</div>
							<div class='card mb-2' id='cardsGym2'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-child'></i></span>SU IMC</strong>
							  </div>
							  <div class='card-body'>
							    <p>NO HAY C&Aacute;LCULO</p>
							  </div>
							</div>
						</div>
					</div>
			<?php
					
					}elseif ($txtAlturaA == "" || $txtPeso == ""){
			?>		<div class='col-12 col-sm-6 text-center' id='imgIMC'>
							<img src='vistas/img/ningunImc.png' class='rounded'>
						</div>
						<div class='col-12 col-sm-6' id='cardsGym'>
							<div class='card mb-2' id='cardsGym1'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-weight'></i></span>SU PESO (kg)</strong>
							  </div>
							  <div class='card-body'>
							    <p><b>Ooops..!</b> Te hizo falta uno de los valores.</p>
							  </div>
							</div>
							<div class='card mb-2' id='cardsGym2'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-child'></i></span>SU IMC</strong>
							  </div>
							  <div class='card-body'>
							    <p>NO HAY C&Aacute;LCULO</p>
							  </div>
							</div>
						</div>
					</div>
			<?php 
					}else{
						$resultadoOperacion = CalcularImc($txtAlturaA, $txtAlturaB, $txtPeso);
						$imcObtenido = DeterminarImc($resultadoOperacion);						
					
			?>		<div class='col-12 col-sm-6 text-center' id='imgIMC'>
			<?php		echo "<img src='".DeterminaImg($imcObtenido)."' class='rounded'>";
			?>
						</div>
						<div class='col-12 col-sm-6' id='cardsGym'>
							<div class='card mb-2' id='cardsGym1'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-weight'></i></span>SU IMC (kg)</strong>
							  </div>
							  <div class='card-body'>
			<?php			echo "<p>".$resultadoOperacion."</p>"; ?>
							  </div>
							</div>
							<div class='card mb-2' id='cardsGym2'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-child'></i></span>SU IMC</strong>
							  </div>
							  <div class='card-body'>
			<?php			echo "<p>".$imcObtenido."</p>"; ?>
							  </div>
							</div>
						</div>
					</div>
			<?php		} 


				}else{
			?>
				<div class='col-12 col-sm-6 text-center' id='imgIMC'>
							<img src='vistas/img/ningunImc.png' class='rounded'>
						</div>
						<div class='col-12 col-sm-6' id='cardsGym'>
							<div class='card mb-2' id='cardsGym1'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-weight'></i></span>SU IMC</strong>
							  </div>
							  <div class='card-body'>
							    <p>0.00</p>
							  </div>
							</div>
							<div class='card mb-2' id='cardsGym2'>
							  <div class='card-header'>
							    <strong><span class='pr-2'><i class='fas fa-child'></i></span>SU GRUPO IMC</strong>
							  </div>
							  <div class='card-body'>
							    <p>NO HAY C&Aacute;LCULO</p>
							  </div>
							</div>
						</div>
					</div>
			<?php
				}
			?>
	</div>
</div>
