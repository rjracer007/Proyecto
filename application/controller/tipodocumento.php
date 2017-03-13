<?php

class Tipodocumento extends Controller
{

  private $mdlTipoDocumento;


  function __construct()
	{
		$this->mdlTipoDocumento = $this->loadModel("mdlTipoDocumento");
	}

  public function index()
  {

      $documento = $this->mdlTipoDocumento->listar2();
      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearT()
    {
        $this->mdlTipoDocumento->__SET("idTipo_documento", $_POST["txtidtip"]);
        $this->mdlTipoDocumento->__SET("descripcion", $_POST["txtdestip"]);
        $very = $this->mdlTipoDocumento->insertarTipodoc();
        header("location: ".URL."adicional/index");
    }

    public function eliminarT($id)
    {
        $this->mdlTipoDocumento->__SET("idTipo_documento", $id);
        $documento = $this->mdlTipoDocumento->eliminarTipodoc();
        header("location: ".URL."adicional/index");
    }


}

 ?>
