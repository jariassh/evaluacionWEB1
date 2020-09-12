<div class="row">
	<div class="col-lg-7 col-xl-8 mt-4" id="contenidoSpring1">
		<div class="row justify-content-center">
			<div id="enuciadoSpring">
				<p>Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de pares de zapatos que se compren.</p>
			</div>
			<div class="d-block d-lg-none w-100 text-center">
				<h4>¿Cuantos Pares Compró?</h4>
			</div>
			<div class="d-flex d-lg-none justify-content-center" id="inputSpring">
				<div class="input-group my-4">
				  <input type="text" class="form-control text-center" placeholder="Cantidad">
				  <div class="input-group-append">
				    <button class="btn btn-warning" type="submit">Calcular</button>
				  </div>
				</div>
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
			<div class="input-group my-4 w-75">
			  <input type="text" class="form-control" placeholder="Cantidad">
			  <div class="input-group-append">
			    <button class="btn btn-warning" type="submit">Calcular</button>
			  </div>
			</div>
		</div>
		<div class="d-flex justify-content-center">
			<h4>Su descuento es:</h4>
		</div>
		<div class="" id="resultadoSpring">
			<h1>20%</h1>
		</div>
	</div>
</div>
