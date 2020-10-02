<div class="row">
	<div class="col-md-6 col-lg-8 mt-4" id="contenidoPostobon1">
		<div class="row justify-content-center">
			<div id="enuciadoPostobon">
				<p>Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20.000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25.000 por hora.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 d-flex justify-content-center">
				<h4 class="mb-4 mt-3">¿Cuantas Horas Trabajó?</h4>
			</div>
			<div class="col-12 d-flex justify-content-center" id="cantidadHoras">
				<form action="postobon" method="post" name="formPostobon">
				<div class="input-group" id="inputHrsPostobon">
				  <input type="text" class="form-control" name="cantHoras" autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-warning" type="submit" name="enviarHoras">Calcular</button>
				  </div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 mt-4">
		<div class="contentSalarioPostobon">
		<div id="resultadoPostobon">
			<h3>Salario semanal:</h3>
		</div>
		<div class="d-flex justify-content-center mb-4">
			<span class="d-flex align-items-center" id="signoSalario">
				<i class="fas fa-dollar-sign px-2"></i>
			</span>
		<?php
			$msjError = "<script>
				            Swal.fire({
				              padding: '1rem',	              
				              timerProgressBar: true,
				              backdrop: true, 
				              toast: false,
				              position: 'top',
							  icon: 'warning',
							  text: 'El empleado no tiene Salario',
							  showConfirmButton: false,
							  timer: 3500
				              })            
    				 </script>";

			if (isset($_POST['enviarHoras'])) {				

				$cantHoras = $_POST['cantHoras'];

				if ($cantHoras >=1 && $cantHoras <=40) {					
					$salarioNormal =  CalcularSalario($cantHoras);
					$salarioExtra = 0;

					echo '<h1>'.number_format($salarioNormal).'</h1>
					</div>
					<div id="descripcionPago">
						<table class="table table-striped text-center">
						<thead>
						    <tr>
						      <th scope="col" colspan="3">
						      	<span>
						      		<a href="#" class="btn btn-warning btn_show">Descripción de Pago</a>
						      	</span>
						      </th>
						    </tr>
						  </thead>
						  <tbody id="contenido" style="display: none;">
						    <tr>
						      <th scope="row" style="Width: 200px;">Hrs. Normal</th>
						      <td>'.$cantHoras.'</td>
						      <td>$'.number_format($salarioNormal).'</td>
						    </tr>
						    <tr>
						      <th scope="row" style="Width: 200px;">Hrs. Extras</th>
						      <td>0</td>
						      <td>$0.00</td>
						    </tr>
						  </tbody>
						</table>
					</div>';
				}elseif($cantHoras > 40){					
					$salarioNormal = 800000;
					$salarioExtra =  CalcularSalario($cantHoras);
					$totalSalario = $salarioNormal+$salarioExtra;
					echo '<h1>'.number_format($totalSalario).'</h1>
					</div>
					<div id="descripcionPago">
						<table class="table table-striped table-sm text-center tables" >
						<thead>
						    <tr>
						      <th scope="col" colspan="3">
						      	<span>
						      		<a href="#" class="btn btn-warning btn_show">Descripción de Pago</a>
						      	</span>
						      </th>
						    </tr>
						  </thead>
						  <tbody id="contenido" style="display: none;">
						    <tr>
						      <th scope="col" style="Width: 200px;">Horas Normales</th>
						      <td>40</td>
						      <td>$'.number_format($salarioNormal).'</td>
						    </tr>
						    <tr>
						      <th scope="col" style="Width: 200px;">Horas Extras</th>
						      <td>'.($cantHoras-40).'</td>
						      <td>$'.number_format($salarioExtra).'</td>
						    </tr>
						  </tbody>
						</table>
					</div>';
				}else{
					echo '<h1>0.00</h1>
					</div>
					<div id="descripcionPago">
						<table class="table table-striped table-sm text-center tables" >
						<thead>
						    <tr>
						      <th scope="col" colspan="3">
						      	<span>
						      		<a href="#" class="btn btn-warning btn_show">Descripción de Pago</a>
						      	</span>
						      </th>
						    </tr>
						  </thead>
						  <tbody id="contenido" style="display: none;">
						    <tr>
						      <th scope="col" style="Width: 200px;">Horas Normales</th>
						      <td>0</td>
						      <td>$00.00</td>
						    </tr>
						    <tr>
						      <th scope="col" style="Width: 200px;">Horas Extras</th>
						      <td>0</td>
						      <td>$00.00</td>
						    </tr>
						  </tbody>
						</table>
					</div>';
					echo $msjError;
				}
							

			}else{
			// else{
			// 	echo "<script>
	  //           Swal.fire({
	  //             padding: '1rem',	              
	  //             timerProgressBar: true,
	  //             backdrop: true, 
	  //             toast: false,
	  //             position: 'top',
			// 	  icon: 'error',
			// 	  text: 'Sin variable Post!',
			// 	  showConfirmButton: false,
			// 	  timer: 3500
	  //             })            
   //  				 </script>";
			// }
		?>
		
			<h1>0.00</h1>
		</div>
		<div id="descripcionPago">
			<table class="table table-striped text-center">
			<thead>
			    <tr>
			      <th scope="col" colspan="3">
			      	<span>
			      		<a href="#" class="btn btn-warning btn_show">Descripción de Pago</a>
			      	</span>
			      </th>
			    </tr>
			  </thead>
			  <tbody id="contenido" style="display: none;">
			    <tr>
			      <th scope="row" style="Width: 200px;">Hrs. Normal</th>
			      <td>0</td>
			      <td>$00.00</td>
			    </tr>
			    <tr>
			      <th scope="row" style="Width: 200px;">Hrs. Extras</th>
			      <td>0</td>
			      <td>$00.00</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		</div>
		<?php 
			}
		?>
	</div>
</div>
