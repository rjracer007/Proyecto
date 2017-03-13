<?php

class Tipocontrato extends Controller
{

  private $mdlTipoContrato;


  function __construct()
	{
		$this->mdlTipoContrato = $this->loadModel("mdlTipoContrato");
	}

  public function index()
  {

      $contrato = $this->mdlTipoContrato->listar4();

      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }

    public function crearC()
    {
        $this->mdlTipoContrato->__SET("idTipo_contrato", $_POST["txtidcon"]);
        $this->mdlTipoContrato->__SET("descripcion", $_POST["txtdescon"]);
        $very = $this->mdlTipoContrato->insertarContrato();
        header("location: ".URL."adicional/index");
    }

    public function eliminarC($id){
        $this->mdlTipoContrato->__SET("idTipo_contrato", $id);
        $contrato = $this->mdlTipoContrato->eliminarContrato();
        header("location: ".URL."adicional/index");
    }

}

 ?>
