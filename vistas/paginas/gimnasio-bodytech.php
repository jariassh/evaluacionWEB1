<div class="row">
	<div class="col-sm-12 col-lg-6 col-xl-7 mt-4" id="contenidoGym1">
		<div class="row justify-content-center">
			<div id="enuciadoGym">
				<p>El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en el formula:</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div>
				 <form>
					<table id="imc">
						<tr>
							<td rowspan="2" class="p-2"> <strong>IMC = </strong></td>
							<td colspan="3" id="peso" style="border-bottom: 2px solid #aaa;">
								<input type="text" name="peso" placeholder="Peso (kg)" class="m-1">
							</td>
						</tr>
						<tr>
							<td><input type="text" placeholder="Altura (m)" class="mt-2"></td>
							<td><h3>*</h3></td>
							<td><input type="text" placeholder="Altura (m)" class="mt-2" disabled="1"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="mt-2" id="contentBtnIMC">
				<button type="button" class="btn btn-warning" id="btnCalcularIMC">Calcular</button>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-lg-6 col-xl-5 mt-4">
		<div id="resultadoGym">
			<h3>Resultados:</h3>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 text-center" id="imgIMC">
				<img src="vistas/img/SobrePesoGradoI.png" class="rounded">
			</div>
			<div class="col-12 col-sm-6" id="cardsGym">
				<div class="card mb-2" id="cardsGym1">
				  <div class="card-header">
				    <strong><span class="pr-2"><i class="fas fa-weight"></i></span>SU PESO (kg)</strong>
				  </div>
				  <div class="card-body">
				    <p>26,4</p>
				  </div>
				</div>
				<div class="card mb-2" id="cardsGym2">
				  <div class="card-header">
				    <strong><span class="pr-2"><i class="fas fa-child"></i></span>SU IMC</strong>
				  </div>
				  <div class="card-body">
				    <p>SOBREPESO GRADO I</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
