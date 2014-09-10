<?php

$numTabla =10;
$inicioTabla =1;
$finTabla = 12;

if (isset($_GET['numTabla'])) {
	$numTabla = $_GET['numTabla'];
}

if (isset($_GET['inicioTabla'])) {
	$inicioTabla = $_GET['inicioTabla'];
}

if (isset($_GET['finTabla'])) {
	$finTabla = $_GET['finTabla'];
}

for ($x = $inicioTabla; $x<= $numTabla+$inicioTabla; $x++){
	echo 'Tabla del ',$x,'</br>';
	for ($i = 0; $i <= $finTabla; $i++){
		echo $x,'x',$i,'=',$x*$i,'</br>';

	}

}



?>