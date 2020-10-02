<?php 

function Operaciones($numero1, $numero2, $operacion){

	if ($operacion == "Sumar"){

		$resultado = $numero1 + $numero2;
		return $resultado;
	}elseif ($operacion == "Restar"){

		$resultado = $numero1 - $numero2;
		return $resultado;
	}elseif ($operacion == "Multiplicar"){

		$resultado = $numero1 * $numero2;
		return $resultado;
	}

}

function CalcularImc($txtAlturaA, $txtAlturaB, $txtPeso){

	$totalAltura = round(($txtAlturaA*$txtAlturaB),1);
	$resultado = round(($txtPeso /$totalAltura),1);
	return $resultado;
}

function DeterminarImc($resultadoOperacion){

	if ($resultadoOperacion >= 1 && $resultadoOperacion < "18.5" ) {

		$imc = "Peso Insuficiente";
		return $imc;

	}elseif ($resultadoOperacion >= "18.5" && $resultadoOperacion <= "24.9") {

		$imc = "Peso Normal";
		return $imc;

	}elseif ($resultadoOperacion >= "25.0" && $resultadoOperacion <= "26.9") {

		$imc = "Sobrepeso Grado I";
		return $imc;

	}elseif ($resultadoOperacion >= "27.0" && $resultadoOperacion <= "29.9") {

		$imc = "Sobrepeso Grado II";
		return $imc;

	}elseif ($resultadoOperacion >= "30.0" && $resultadoOperacion <= "34.9") {

		$imc = "Obesidad Tipo I";
		return $imc;

	}elseif ($resultadoOperacion >= "35.0" && $resultadoOperacion <= "39.9") {

		$imc = "Obesidad Tipo II";
		return $imc;

	}elseif ($resultadoOperacion >= "40.0" && $resultadoOperacion <= "49.9") {

		$imc = "Obesidad Tipo III";
		return $imc;

	}elseif ($resultadoOperacion >= "50.0") {

		$imc = "Obesidad Tipo IV";
		return $imc;

	}else{

		$imc = "Su IMC no pudo ser calculado";
		return $imc;
	}
}

function DeterminaImg($imcObtenido){

	switch ($imcObtenido) {
		case 'Peso Insuficiente':
			$img = 'vistas/img/PesoInsuficiente.png';
			return $img;
			break;
		case 'Peso Normal':
			$img = 'vistas/img/PesoNormal.png';
			return $img;
			break;
		case 'Sobrepeso Grado I':
			$img = 'vistas/img/SobrePesoGradoI.png';
			return $img;
			break;
		case 'Sobrepeso Grado II':
			$img = 'vistas/img/SobrePesoGradoII.png';
			return $img;
			break;
		case 'Obesidad Tipo I':
			$img = 'vistas/img/ObesidadTipoI.png';
			return $img;
			break;
		case 'Obesidad Tipo II':
			$img = 'vistas/img/ObesidadTipoII.png';
			return $img;
			break;
		case 'Obesidad Tipo III':
			$img = 'vistas/img/ObesidadTipoIII.png';
			return $img;
			break;
		case 'Obesidad Tipo IV':
			$img = 'vistas/img/ObesidadTipoIV.png';
			return $img;
			break;
		
		default:
			$img = 'vistas/img/PesoNormal.png';
			return $img;
			break;
	}	
}

function DescuentoSpring($cantidad) {
	
	if ($cantidad == 3) {

		$descuento = 10;
		return $descuento;
		
	}elseif ($cantidad >= 4 && $cantidad <= 8){

		$descuento = 20;
		return $descuento;

	}elseif ($cantidad > 8){

		$descuento = 50;
		return $descuento;

	}else{

		$descuento = 0;
		return $descuento;    	
	}
}