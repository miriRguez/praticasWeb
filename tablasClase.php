<?php


class tablas{

	private $numTabla;
	private $inicioTabla;
	private $finTabla;

	function __construct(){
		$this -> numTabla = 10;
		$this -> inicioTabla = 1;
		$this -> finTabla = 12;

		if (isset($_GET['numTabla'])) {

			$this -> numTabla = $_GET['numTabla'];
		}
		if (isset($_GET['inicio'])) {
			$this -> inicioTabla = $_GET['inicio'];
		}
		if (isset($_GET['limite'])) {
			$this -> finTabla = $_GET['limite'];
		}
	}
	public function imprimeTablas(){

		$limite =  $this ->numTabla + $this ->inicioTabla;
		for ($x = $this -> inicioTabla; $x<= $limite; $x++){
			echo '</br>';
			echo 'Tabla del ',$x,'</br>';
			echo '</br>';
			for ($i = 0; $i <= $this->finTabla; $i++){
				echo $x,'x',$i,'=',$x*$i,'</br>';

			}

		}

	}

}


$tablas = new tablas();
$tablas -> imprimeTablas();



?>