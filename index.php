<?php
	require_once('php/encabezado.php');
	
	echo('<p><h1 class="text-center m-4 p-3">Nueve y Medio</h1></p>');
	
$num1 = mt_rand(1,12);
$num2 = mt_rand(1,12);

$puntos1 = 0;
$puntos2= 0;

$puntos = '';

switch($num1){
	case 10:
		$puntos1=0.5;
		echo('<p class="fs-3 btn bg-white p-3 text-center  col-6 mb-5 ">Naipe 1: Sota</p>');
	break;
	
	case 11:
		$puntos1=0.5;
		echo('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 1: Caballo</p>');
	break;
	
	case 12:
		$puntos1=0.5;
		echo('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 1: Rey</p>');
	break;
	
	default:
	echo ('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 1:' . $num1 .'</p>');
	$puntos1 = $num1;
}

switch($num2){
	case 10:
		$puntos2=0.5;
		echo('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 2: Sota</p>');
	break;
	
	case 11:
		$puntos2=0.5;
		echo('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 2: Caballo</p>');
	break;
	
	case 12:
		$puntos2=0.5;
		echo('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 2: Rey</p>');
	break;
	
	default:
	echo ('<p class="fs-3 btn bg-white p-3 text-center col-6 mb-5">Naipe 2:' . $num2 .'</p>');
	$puntos2 = $num2;
}

$resultado = $puntos1 + $puntos2;

if($resultado == 9.5){
	echo '<p class=" text-success fs-2 bg-white p-3 text-center container">Ganador</p>';
}else{
	echo('<p class=" text-dark fs-2 bg-white p-3 text-center container">Resultado:' . $resultado . '</p>');
}
?>
<?php
	require_once('php/pie.php')
?>