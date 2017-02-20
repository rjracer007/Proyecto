<?php 

class Gusuario extends Controller
{

    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/registrar.php';
        require APP . 'view/_templates/footer.php';
    }
}

 ?>