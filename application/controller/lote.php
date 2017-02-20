<?php


 
class Lote extends Controller
{
    private $mdlModel = null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlLote");
    }
    public function index()
    {

        $datos = $this->mdlLote->listar();

       
        include APP . 'view/_templates/header.php';
        include APP . 'view/lote/index.php';
        include APP . 'view/_templates/footer.php';
    }


    public function edit($id)
    { 
        $this->mdlLote->__SET("Cod", $id);  
        $datos = $this->mdlLote->consultarUno();

        include APP . 'view/_templates/header.php';
        include APP . 'view/lote/edit.php';
        include APP . 'view/_templates/footer.php';
    }

    public function modificar(){
        $this->mdlLote->__SET("Cod", $POST["codigo"]);
        $this->mdlLote->__SET("Nombre", $POST["nombre"]);
        $this->mdlLote->__SET("Cantidad", $POST["cantidad"]);
        $this->mdlLote->__SET("Fecha", $POST["fecha"]);
        $very = $this->mdlLote->modificar();
        header("location: ".URL."lote/index");
    }

