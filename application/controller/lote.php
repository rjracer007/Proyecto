<?php 
class Lote extends Controller
{
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/lote/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/lote/registrar.php';
        require APP . 'view/_templates/footer.php';
    }
}
 ?>