<?php 
class Orden extends Controller
{
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/orden/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function registrar()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/orden/registrar.php';
        require APP . 'view/_templates/footer.php';
    }
}
 ?>