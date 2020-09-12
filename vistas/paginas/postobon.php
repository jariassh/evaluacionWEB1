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
				<div class="input-group" id="inputHrsPostobon">
				  <input type="text" class="form-control" value="55">
				  <div class="input-group-append">
				    <button class="btn btn-warning" type="submit">Calcular</button>
				  </div>
				</div>
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
			<h1>1'175.000</h1>
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
			      <th scope="row">Hrs. Normal</th>
			      <td>40</td>
			      <td>800.00</td>
			    </tr>
			    <tr>
			      <th scope="row">Hrs. Extras</th>
			      <td>15</td>
			      <td>375.00</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		</div>
	</div>
</div>
