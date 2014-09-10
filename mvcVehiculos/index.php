<?php
//get query args

$ctrl;
switch ($_REQUEST['ctrl']) {
	case 'vehiculos':
		//crear y ejecutar el controlador
		require('Controlador/vehiculos.php');
		//crear objeto
		$ctrl = new vehiculosCtrl();
	case 'usuarios':
		require('controllers/UsuarioControlador.php');
		$ctrl = new UsuarioControlador();
		break;


		break;
	default:
	echo "ningun parametro!!";

} // switch

$ctrl->run();

?>