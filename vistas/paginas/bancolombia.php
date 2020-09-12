<div class="row justify-content-center">
	<div class="col-12 col-md-10 mt-4 minh-100" id="tabsBancolombia">
		<div class="d-none d-lg-block card text-justify mb-4">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs" id="nav-tab" role="tablist">
					<li><a class="nav-link active" id="nav-descripcion-tab" data-toggle="tab" href="#nav-descripcion" role="tab" aria-controls="nav-descripcion" aria-selected="true"><span class="pr-2"><i class="fas fa-sticky-note"></i></span>Descripción</a></li>

					<li><a class="nav-link" id="nav-registro-tab" data-toggle="tab" href="#nav-registro" role="tab" aria-controls="nav-registro" aria-selected="false"><span class="pr-2"><i class="fas fa-user-plus"></i></span>Registro Usuarios</a></li>
					<li><a class="nav-link" id="nav-usuarios-tab" data-toggle="tab" href="#nav-usuarios" role="tab" aria-controls="nav-usuarios" aria-selected="false"><span class="pr-2"><i class="fas fa-users"></i></span>Usuarios</a></li>
					<li><a class="nav-link" id="nav-sucursales-tab" data-toggle="tab" href="#nav-sucursales" role="tab" aria-controls="nav-sucursales" aria-selected="false"><span class="pr-2"><i class="fas fa-building"></i></span>Sucursales</a></li>
				</ul>
			</div>
		<div class="card-body">
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-descripcion" role="tabpanel" aria-labelledby="nav-descripcion-tab">
			  	<p class="card-text px-4">Bancolombia contrata sus servicios de desarrollador para realizar un <strong>programa en PHP</strong> que permita:</p>
				<ol class="px-4">
					<li>Almacenar en variables información de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada <strong>sucursal A</strong>.</li>
					<li><strong>Sumar todos los salarios de los usuarios de la sucursal A</strong> en una sola variable llamada <strong>$sumatoriaSalarios</strong> y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000.</li>
				</ol>
				<p class="card-text px-4">Permita que su código muestre <strong>cual sucursal tiene la mejor sumatoria de salarios</strong> y además muestre en pantalla la información completa de los <strong>5 usuarios de la sucursal A</strong></p>
			  </div>
			  <div class="tab-pane fade" id="nav-registro" role="tabpanel" aria-labelledby="nav-registro-tab">
			  	<div class="bg-light">
			  		<div class="row">
				  		<div class="col-6 d-flex justify-content-end text-center">
							<form class="pt-5 pb-4" method="post">
								<div class="form-group">
									<label for="nombre">Nombre:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user-plus"></i></span>
										</div>
										<input type="text" class="form-control" id="nombre" name="registroNombre">
									</div>
								</div>
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
										</div>
										<input type="text" class="form-control" id="telefono" name="registroTelefono">
									</div>
								</div>
							</form>
				  		</div>
				  		<div class="col-6 d-flex justify-content-start text-center">
					  		<form class="pt-5 pb-4" method="post">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
										</div>
										<input type="text" class="form-control" id="direccion" name="registroDireccion">
									</div>
								</div>
								<div class="form-group">
									<label for="salario">Salario:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-coins"></i></span>
										</div>
										<input type="text" class="form-control" id="salario" name="registroSalario">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-12 d-flex justify-content-center text-center">
							<form class="pb-5" method="post">
								<button type="submit" class="btn btn-primary">Registrar</button>
							</form>
						</div>
					</div>
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-usuarios" role="tabpanel" aria-labelledby="nav-usuarios-tab">
			  	<div class="text-center">
			  		<h4>Usuarios Sucursal A</h4>
			  	</div>
		  		<table class="table table-striped" >
				  <thead class="text-center">
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Telefono</th>
				      <th scope="col">Dirección</th>
				      <th scope="col">Salario</th>
				      <th scope="col">Acciones</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">5</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="nav-sucursales" role="tabpanel" aria-labelledby="nav-sucursales-tab">
				<div class="text-center">
			  		<h4>Comparemos Salarios Sucursales</h4>
			  	</div>
			  	<div class="text-justify">
			  		<p>A continuación se relacionan, los salarios de las sucursales B y C, comparado con la sumatoria del total de salarios pagados a los usuarios en la sucural A.</p>
			  	</div>
			  	<div class="d-flex justify-content-center text-center">
			  		<div class="card" style="width: 10rem;">
					  <div class="card-header">
					    <p style="font-weight: bold;"><span class="pr-1"><i class="fas fa-star"></i></span>Sucursal A</p>
					  </div>
					  <div class="card-body">
					  	<p class="card-text">$40'000.000</p>
					  </div>
					</div>
					<div class="card mx-5" style="width: 10rem;">
					  <div class="card-header">
					    <p style="font-weight: bold;"><span class="pr-1"><i class="fas fa-star"></i></span>Sucursal B</p>
					  </div>
					  <div class="card-body">
					  	<p class="card-text">$40'000.000</p>
					  </div>
					</div>
					<div class="card" style="width: 10rem;">
					  <div class="card-header">
					    <p style="font-weight: bold;"><span class="pr-1"><i class="fas fa-star"></i></span>Sucursal C</p>
					  </div>
					  <div class="card-body">
					  	<p class="card-text">$40'000.000</p>
					  </div>
					</div>
			  	</div>
			  </div>
			 </div>
		</div>
	</div>

<!--============================================
=            ACORDEON VISTA MOVILES            =
=============================================-->

	<div class="d-block d-lg-none" id="contentMobileBancol">
	  <div class="card">
	    <div class="card-header" id="headingOne">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center btnAcordeon" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          <span class="pr-2"><i class="fas fa-sticky-note"></i></span>Descripción
	        </button>
	      </h2>
	    </div>

	    <div id="collapseOne" class="collapse text-justify" aria-labelledby="headingOne" data-parent="#contentMobileBancol">
	      <div class="card-body">
	        <p class="card-text px-4">Bancolombia contrata sus servicios de desarrollador para realizar un <strong>programa en PHP</strong> que permita:</p>
			<ol class="px-4">
				<li>Almacenar en variables información de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada <strong>sucursal A</strong>.</li>
				<li><strong>Sumar todos los salarios de los usuarios de la sucursal A</strong> en una sola variable llamada <strong>$sumatoriaSalarios</strong> y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000.</li>
			</ol>
			<p class="card-text px-4">Permita que su código muestre <strong>cual sucursal tiene la mejor sumatoria de salarios</strong> y además muestre en pantalla la información completa de los <strong>5 usuarios de la sucursal A</strong></p>
	      </div>
	    </div>
	  </div>
	  <div class="card">
	    <div class="card-header" id="headingTwo">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed btnAcordeon" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	          <span class="pr-2"><i class="fas fa-user-plus"></i></span>Registro Usuarios
	        </button>
	      </h2>
	    </div>
	    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#contentMobileBancol">
	      <div class="card-body">
	        <div class="bg-light">
		  		<div class="row">
			  		<div class="col-12 col-md-6" id="formBancol1">
						<form class="formBancol_MD1" method="post">
							<div class="form-group">
								<label for="nombre">Nombre:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user-plus"></i></span>
									</div>
									<input type="text" class="form-control" id="nombre" name="registroNombre">
								</div>
							</div>
							<div class="form-group">
								<label for="telefono">Teléfono:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
									</div>
									<input type="text" class="form-control" id="telefono" name="registroTelefono">
								</div>
							</div>
						</form>
			  		</div>
			  		<div class="col-12 col-md-6" id="formBancol2">
				  		<form class="formBancol_MD2" method="post">
							<div class="form-group">
								<label for="direccion">Dirección:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
									</div>
									<input type="text" class="form-control" id="direccion" name="registroDireccion">
								</div>
							</div>
							<div class="form-group">
								<label for="salario">Salario:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-coins"></i></span>
									</div>
									<input type="text" class="form-control" id="salario" name="registroSalario">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-12 d-flex justify-content-center text-center">
						<form class="pb-5" method="post">
							<button type="submit" class="btn btn-primary">Registrar</button>
						</form>
					</div>
				</div>
		  	</div>
	      </div>
	    </div>
	  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link btn-block text-center collapsed btnAcordeon" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          <span class="pr-2"><i class="fas fa-users"></i></span>Usuarios
		        </button>
		      </h2>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#contentMobileBancol">
		      <div class="card-body">
		        <div class="text-center">
			  		<h4>Usuarios Sucursal A</h4>
			  	</div>
			  	<div class="table_wraper">
		  		<table class="table table-striped" >
				  <thead class="text-center">
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Telefono</th>
				      <th scope="col">Dirección</th>
				      <th scope="col">Salario</th>
				      <th scope="col">Acciones</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				    <tr>
				      <th scope="row">5</th>
				      <td>Mark</td>
				      <td>(4)5283628</td>
				      <td>Calle 110B No. 42B-23 Popular</td>
				      <td>$3'600.000</td>
				      <td class="d-flex justify-content-center">
				      	<div class="btn-group">
				      		<div class="px-1">
								<a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
							</div>
				      	</div>
						  </td>
				    </tr>
				  </tbody>
				</table>
				</div>
		      </div>
			</div>
		</div>
	    <div class="card">
	    <div class="card-header" id="headingFour">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed btnAcordeon" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	          <span class="pr-2"><i class="fas fa-building"></i></span>Sucursales
	        </button>
	      </h2>
	    </div>

	    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#contentMobileBancol">



	      <div class="card-body">
	        <div class="text-center">
			  		<h4>Comparemos Salarios Sucursales</h4>
			  	</div>
			  	<div class="text-justify">
			  		<p>A continuación se relacionan, los salarios de las sucursales B y C, comparado con la sumatoria del total de salarios pagados a los usuarios en la sucural A.</p>
			  	</div>
			  	<div class="text-center">
			  		<div class="col-12 col-sm-6" id="contentA">
			  		<div class="card" id="cardSucursalA">
					  <div class="card-header">
					    <p style="font-weight: bold;"><span class="pr-1"><i class="fas fa-star"></i></span>Sucursal A</p>
					  </div>
					  <div class="card-body">
					  	<p class="card-text">$40'000.000</p>
					  </div>
					</div>
					</div>
					<div class="col-12 col-sm-6" id="contentB">
					<div class="card" id="cardSucursalB">
					  <div class="card-header">
					    <p style="font-weight: bold;"><span class="pr-1"><i class="fas fa-star"></i></span>Sucursal B</p>
					  </div>
					  <div class="card-body">
					  	<p class="card-text">$40'000.000</p>
					  </div>
					</div>
					</div>
					<div class="col-12" id="contentC">
					<div class="card" id="cardSucursalC">
					  <div class="card-header">
					    <p style="font-weight: bold;"><span class="pr-1"><i class="fas fa-star"></i></span>Sucursal C</p>
					  </div>
					  <div class="card-body">
					  	<p class="card-text">$40'000.000</p>
					  </div>
					</div>
					</div>
			  	</div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>
