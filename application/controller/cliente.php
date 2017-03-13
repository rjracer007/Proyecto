<?php

  class Cliente extends Controller
{

     private $mdlCliente; 

    function __construct()
        {
            $this->mdlCliente = $this->loadModel("mdlCliente");
        }

    public function index()
    {
        // load views
        $client = $this->mdlCliente->listarCliente();
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/cliente/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/cliente/registrar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function insertar(){
        $this->mdlCliente->__SET("idCliente", $_POST["txtcod"]);
        $this->mdlCliente->__SET("nombre", $_POST["txtnom"]);
        $this->mdlCliente->__SET("apellidos", $_POST["txtape"]);
        $this->mdlCliente->__SET("nit", $_POST["txtnit"]);
        $this->mdlCliente->__SET("telefono", $_POST["txttel"]);
        $this->mdlCliente->__SET("direccion", $_POST["txtdir"]);
        $very = $this->mdlCliente->nuevoCliente();
        header("location: ".URL."cliente/index");

    }

    public function editar($id){
        $this->mdlCliente->__SET("idCliente", $id);
        $client = $this->mdlCliente->consultarUno();
        include APP."view/_templates/header.php";
        include APP."view/pedido/cliente/editar.php";
        include APP."view/_templates/footer.php";
    }

    public function modificar(){    
        $this->mdlCliente->__SET("idCliente", $_POST["txtcod"]);
        $this->mdlCliente->__SET("nombre", $_POST["txtnom"]);
        $this->mdlCliente->__SET("apellidos", $_POST["txtape"]);
        $this->mdlCliente->__SET("nit", $_POST["txtnit"]);
        $this->mdlCliente->__SET("telefono", $_POST["txttel"]);
        $this->mdlCliente->__SET("direccion", $_POST["txtdir"]);
        $very = $this->mdlCliente->modificarCliente();
        header("location: ".URL."cliente/index");
    }

    public function eliminar($id){
        $this->mdlCliente->__SET("idCliente", $id);
        $client = $this->mdlCliente->elimina();
        header("location: ".URL."cliente/index");
    }

}

 ?>
