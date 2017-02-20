<?php

  class Cliente extends Controller
{

    public function index()
    {
        // load views
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

}

 ?>
