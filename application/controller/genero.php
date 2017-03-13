<?php

class Genero extends Controller
{

  private $mdlGenero;


  function __construct()
	{
		$this->mdlGenero = $this->loadModel("mdlGenero");
	}

  public function index()
  {
      $genero = $this->mdlGenero->listar1();


      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }


    public function crearG()
    {
        $this->mdlGenero->__SET("idGenero", $_POST["txtidgen"]);
        $this->mdlGenero->__SET("nombre", $_POST["txtnomgen"]);
        $very = $this->mdlGenero->insertarGenero();
        header("location: ".URL."adicional/index");
    }

    public function eliminarG($id){
      $this->mdlGenero->__SET("idGenero", $id);
      $genero = $this->mdlGenero->eliminarGenero();
      header("location: ".URL."adicional/index");
    }

}

 ?>
