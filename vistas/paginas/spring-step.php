<div class="row">
	<?php 

	if (isset($_POST['btnCalcular']) || isset($_POST['calcular2'])) {

		$cantidad = $_POST['cantidad'];		
		$msjError = "<script>
	            Swal.fire({
	              padding: '1rem',	              
	              timerProgressBar: true,
	              backdrop: true, 
	              toast: false,
	              position: 'top',
				  icon: 'error',
				  text: 'Operación inválidad. Por favor ingrese una cantidad!',
				  showConfirmButton: false,
				  timer: 3500
	              })            
    				 </script>";
		$msjNoDesc = "<script>
			            Swal.fire({
			              padding: '1rem',	              
			              timerProgressBar: true,
			              backdrop: true, 
			              toast: false,
			              position: 'top',
						  icon: 'warning',
						  text: 'Este cliente no aplica para descuentos.!',
						  showConfirmButton: false,
						  timer: 3500
			            })            
			          </script>";

		$contProm0 = '<div class="col-lg-7 col-xl-8 mt-4" id="contenidoSpring1">
							<div class="row justify-content-center">
								<div id="enuciadoSpring">
									<p>Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de pares de zapatos que se compren.</p>
								</div>
								<div class="d-block d-lg-none w-100 text-center">
									<h4>¿Cuantos Pares Compró?</h4>
								</div>
								<div class="d-flex d-lg-none justify-content-center" id="inputSpring">
									<form action="" method="post" name="formularioSpringMovil">
										<div class="input-group my-4">
										  <input type="text" class="form-control text-center" placeholder="Cantidad" name="cantidad" autocomplete="off">
										  <div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="calcular2">Calcular</button>
										  </div>
										</div>
									</form>
								</div>
							</div>
							<div class="row d-flex justify-content-center">
								<div class="card mx-2" id="promoSpring1">
								  <div class="card-header"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 1</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 3 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió tan solo 3 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center" >
									  	<form>
									  		<div class="input-group text-center" >
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring2">
								  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 2</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 4 a 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió de 4 a 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring3">
								  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 3</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra más de 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió más de 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-xl-4 mt-4">
							<div class="d-none d-lg-flex justify-content-center">
								<h4>¿Cuantos Pares Compró?</h4>
							</div>
							<div class="d-none d-lg-flex justify-content-center">
								<form action="spring-step" method="post" name="formularioSpring">
									<div class="input-group my-4 w-100">					
										<input type="text" class="form-control" placeholder="Cantidad" name="cantidad" autocomplete="off">
										<div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="btnCalcular">Calcular</button>
										</div>				
									</div>
								</form>
							</div>
							<div class="d-flex justify-content-center">
								<h4>Su descuento es:</h4>
							</div>
							<div class="" id="resultadoSpring">
								<h1>0%</h1>
							</div>
						</div>';
		$contProm1 = '<div class="col-lg-7 col-xl-8 mt-4" id="contenidoSpring1">
							<div class="row justify-content-center">
								<div id="enuciadoSpring">
									<p>Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de pares de zapatos que se compren.</p>
								</div>
								<div class="d-block d-lg-none w-100 text-center">
									<h4>¿Cuantos Pares Compró?</h4>
								</div>
								<div class="d-flex d-lg-none justify-content-center" id="inputSpring">
									<form action="" method="post" name="formularioSpringMovil">
										<div class="input-group my-4">
										  <input type="text" class="form-control text-center" placeholder="Cantidad" name="cantidad" autocomplete="off">
										  <div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="calcular2">Calcular</button>
										  </div>
										</div>
									</form>
								</div>
							</div>
							<div class="row d-flex justify-content-center">
								<div class="card mx-2" id="promoSpring1">
								  <div class="card-header text-center" style="font-weight:bold; color:green;"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 1</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 3 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió tan solo 3 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center" >
									  	<form>
									  		<div class="input-group text-center" >
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio" checked>
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring2">
								  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 2</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 4 a 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió de 4 a 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring3">
								  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 3</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra más de 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió más de 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-xl-4 mt-4">
							<div class="d-none d-lg-flex justify-content-center">
								<h4>¿Cuantos Pares Compró?</h4>
							</div>
							<div class="d-none d-lg-flex justify-content-center">
								<form action="spring-step" method="post" name="formularioSpring">
									<div class="input-group my-4 w-100">					
										<input type="text" class="form-control" placeholder="Cantidad" name="cantidad" autocomplete="off">
										<div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="btnCalcular">Calcular</button>
										</div>				
									</div>
								</form>
							</div>
							<div class="d-flex justify-content-center">
								<h4>Su descuento es:</h4>
							</div>
							<div class="" id="resultadoSpring">
								<h1>10%</h1>
							</div>
						</div>';
		$contProm2 = '<div class="col-lg-7 col-xl-8 mt-4" id="contenidoSpring1">
							<div class="row justify-content-center">
								<div id="enuciadoSpring">
									<p>Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de pares de zapatos que se compren.</p>
								</div>
								<div class="d-block d-lg-none w-100 text-center">
									<h4>¿Cuantos Pares Compró?</h4>
								</div>
								<div class="d-flex d-lg-none justify-content-center" id="inputSpring">
									<form action="" method="post" name="formularioSpringMovil">
										<div class="input-group my-4">
										  <input type="text" class="form-control text-center" placeholder="Cantidad" name="cantidad" autocomplete="off">
										  <div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="calcular2">Calcular</button>
										  </div>
										</div>
									</form>
								</div>
							</div>
							<div class="row d-flex justify-content-center">
								<div class="card mx-2" id="promoSpring1">
								  <div class="card-header"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 1</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 3 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió tan solo 3 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center" >
									  	<form>
									  		<div class="input-group text-center" >
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring2">
								  <div class="card-header d-flex justify-content-center text-center" style="font-weight:bold; color:green;"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 2</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 4 a 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió de 4 a 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio" checked>
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring3">
								  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 3</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra más de 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió más de 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-xl-4 mt-4">
							<div class="d-none d-lg-flex justify-content-center">
								<h4>¿Cuantos Pares Compró?</h4>
							</div>
							<div class="d-none d-lg-flex justify-content-center">
								<form action="spring-step" method="post" name="formularioSpring">
									<div class="input-group my-4 w-100">					
										<input type="text" class="form-control" placeholder="Cantidad" name="cantidad" autocomplete="off">
										<div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="btnCalcular">Calcular</button>
										</div>				
									</div>
								</form>
							</div>
							<div class="d-flex justify-content-center">
								<h4>Su descuento es:</h4>
							</div>
							<div class="" id="resultadoSpring">
								<h1>20%</h1>
							</div>
						</div>';
		$contProm3 = '<div class="col-lg-7 col-xl-8 mt-4" id="contenidoSpring1">
							<div class="row justify-content-center">
								<div id="enuciadoSpring">
									<p>Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de pares de zapatos que se compren.</p>
								</div>
								<div class="d-block d-lg-none w-100 text-center">
									<h4>¿Cuantos Pares Compró?</h4>
								</div>
								<div class="d-flex d-lg-none justify-content-center" id="inputSpring">
									<form action="" method="post" name="formularioSpringMovil">
										<div class="input-group my-4">
										  <input type="text" class="form-control text-center" placeholder="Cantidad" name="cantidad" autocomplete="off">
										  <div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="calcular2">Calcular</button>
										  </div>
										</div>
									</form>
								</div>
							</div>
							<div class="row d-flex justify-content-center">
								<div class="card mx-2" id="promoSpring1">
								  <div class="card-header"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 1</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 3 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió tan solo 3 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center" >
									  	<form>
									  		<div class="input-group text-center" >
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring2">
								  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 2</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra 4 a 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió de 4 a 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio">
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
								<div class="card mx-2" id="promoSpring3">
								  <div class="card-header d-flex justify-content-center text-center" style="font-weight:bold; color:green;"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 3</div>
								  <div class="card-body text-dark">
								    <h5 class="card-title">Compra más de 8 Pares:</h5>
								    <p class="card-text">Si el cliente adquirió más de 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
								  </div>
								  <div class="card-footer d-flex justify-content-center">
									  	<form>
									  		<div class="input-group">
									  			<div class="input-group-text" style="margin: 0 auto;">
										          <input type="radio" checked>
										        </div>
									  		</div>
									  	</form>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-xl-4 mt-4">
							<div class="d-none d-lg-flex justify-content-center">
								<h4>¿Cuantos Pares Compró?</h4>
							</div>
							<div class="d-none d-lg-flex justify-content-center">
								<form action="spring-step" method="post" name="formularioSpring">
									<div class="input-group my-4 w-100">					
										<input type="text" class="form-control" placeholder="Cantidad" name="cantidad" autocomplete="off">
										<div class="input-group-append">
										    <button class="btn btn-warning" type="submit" name="btnCalcular">Calcular</button>
										</div>				
									</div>
								</form>
							</div>
							<div class="d-flex justify-content-center">
								<h4>Su descuento es:</h4>
							</div>
							<div class="" id="resultadoSpring">
								<h1>50%</h1>
							</div>
						</div>';

		if ($cantidad != "") {		

			$resultado = DescuentoSpring($cantidad);
			
			if ($resultado == 0) {
				echo $contProm0;
				echo $msjNoDesc;
 
			}elseif ($resultado == 10){

				echo $contProm1;

			}elseif ($resultado == 20){

				echo $contProm2;
			}elseif ($resultado == 50){

				echo $contProm3;
			}

			DescuentoSpring($cantidad);	

		}else{
			echo $contProm0.$msjError;
		}	
	}else {
?>
	<div class="col-lg-7 col-xl-8 mt-4" id="contenidoSpring1">
		<div class="row justify-content-center">
			<div id="enuciadoSpring">
				<p>Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de pares de zapatos que se compren.</p>
			</div>
			<div class="d-block d-lg-none w-100 text-center">
				<h4>¿Cuantos Pares Compró?</h4>
			</div>
			<div class="d-flex d-lg-none justify-content-center" id="inputSpring">
				<form action="" method="post" name="formularioSpringMovil">
					<div class="input-group my-4">
					  <input type="text" class="form-control text-center" placeholder="Cantidad" name="cantidad" autocomplete="off">
					  <div class="input-group-append">
					    <button class="btn btn-warning" type="submit" name="calcular2">Calcular</button>
					  </div>
					</div>
				</form>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="card mx-2" id="promoSpring1">
			  <div class="card-header"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 1</div>
			  <div class="card-body text-dark">
			    <h5 class="card-title">Compra 3 Pares:</h5>
			    <p class="card-text">Si el cliente adquirió tan solo 3 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
			  </div>
			  <div class="card-footer d-flex justify-content-center" >
				  	<form>
				  		<div class="input-group text-center" >
				  			<div class="input-group-text" style="margin: 0 auto;">
					          <input type="radio">
					        </div>
				  		</div>
				  	</form>
			    </div>
			</div>
			<div class="card mx-2" id="promoSpring2">
			  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 2</div>
			  <div class="card-body text-dark">
			    <h5 class="card-title">Compra 4 a 8 Pares:</h5>
			    <p class="card-text">Si el cliente adquirió de 4 a 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
			  </div>
			  <div class="card-footer d-flex justify-content-center">
				  	<form>
				  		<div class="input-group">
				  			<div class="input-group-text" style="margin: 0 auto;">
					          <input type="radio">
					        </div>
				  		</div>
				  	</form>
			    </div>
			</div>
			<div class="card mx-2" id="promoSpring3">
			  <div class="card-header d-flex justify-content-center"><span class="pr-2"><i class="fas fa-gift"></i></span>Promocion 3</div>
			  <div class="card-body text-dark">
			    <h5 class="card-title">Compra más de 8 Pares:</h5>
			    <p class="card-text">Si el cliente adquirió más de 8 pares de zapatos. Seleccione esta opción para descubrir su descuento.</p>
			  </div>
			  <div class="card-footer d-flex justify-content-center">
				  	<form>
				  		<div class="input-group">
				  			<div class="input-group-text" style="margin: 0 auto;">
					          <input type="radio">
					        </div>
				  		</div>
				  	</form>
			    </div>
			</div>
		</div>
	</div>
	<div class="col-lg-5 col-xl-4 mt-4">
		<div class="d-none d-lg-flex justify-content-center">
			<h4>¿Cuantos Pares Compró?</h4>
		</div>
		<div class="d-none d-lg-flex justify-content-center">
			<form action="spring-step" method="post" name="formularioSpring">
				<div class="input-group my-4 w-100">					
					<input type="text" class="form-control" placeholder="Cantidad" name="cantidad" autocomplete="off">
					<div class="input-group-append">
					    <button class="btn btn-warning" type="submit" name="btnCalcular">Calcular</button>
					</div>				
				</div>
			</form>
		</div>
		<div class="d-flex justify-content-center">
			<h4>Su descuento es:</h4>
		</div>
		<div class="" id="resultadoSpring">
			<h1>0%</h1>
		</div>
	</div>
</div>
<?php 
  }

?>