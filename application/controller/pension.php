<?php

class Pension extends Controller
{

  private $mdlPension;


  function __construct()
	{
		$this->mdlPension = $this->loadModel("mdlPension");
	}

  public function index()
  {

      $pension = $this->mdlPension->listar3();

      require APP . 'view/_templates/header.php';
      require APP . 'view/gusuario/adicional/index.php';
      require APP . 'view/_templates/footer.php';
  }



    public function crearP()
    {
        $this->mdlPension->__SET("idPension", $_POST["txtidpen"]);
        $this->mdlPension->__SET("nombre", $_POST["txtnompen"]);
        $this->mdlPension->__SET("abreviatura", $_POST["txtabre"]);
        $this->mdlPension->__SET("fecha_ingreso", $_POST["txtfecin"]);
        $this->mdlPension->__SET("fecha_retiro", $_POST["txtfecre"]);
        $very = $this->mdlPension->insertarPension();
        header("location: ".URL."adicional/index");
    }

    public function eliminarP($id)
    {
        $this->mdlPension->__SET("idPension", $id);
        $pension = $this->mdlPension->eliminarPension();
        header("location: ".URL."adicional/index");
    }



}

 ?>
