<?php

class Calendario extends Controller
{

	function __construct()
	{

	}

	function index()
	{
		// $insumo = $this->mdlInsumo->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/calendario/calendario.php';
		require APP. 'view/_templates/footer.php';
	}
}
 ?>
