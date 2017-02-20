<?php

class Pedido extends Controller
{

    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/pedido/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/pedido/pedido/registrar.php';
        require APP . 'view/_templates/footer.php';
    }


}

 ?>
