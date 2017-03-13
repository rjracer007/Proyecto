<?php

/**
*
*/
class Adicional extends Controller
{


	private $mdlGenero;
  private $mdlTipoDocumento;
  private $mdlPension;
  private $mdlTipoContrato;


	function __construct()
	{
		$this->mdlGenero = $this->loadModel("mdlGenero");
		$this->mdlPension = $this->loadModel("mdlPension");
		$this->mdlTipoDocumento = $this->loadModel("mdlTipoDocumento");
		$this->mdlTipoContrato = $this->loadModel("mdlTipoContrato");

	}

	public function index()
	{
		    $genero = $this->mdlGenero->Listar1();
        $documento = $this->mdlTipoDocumento->Listar2();
        $pension = $this->mdlPension->Listar3();
        $contrato = $this->mdlTipoContrato->Listar4();



		require APP.'view/_templates/header.php';
		require APP.'view/gusuario/adicional/index.php';
		require APP.'view/_templates/footer.php';
	}
}
