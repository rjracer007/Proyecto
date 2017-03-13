<?php


class Login extends Controller
{

  private $mdlLogin;


  function __construct()
     {
         $this->mdlLogin = $this->loadModel("mdlLogin");
     }

    public function index()
    {


        require APP . 'view/login/index.php';

    }
    public function registrar()
    {

        require APP . 'view/login/registrar.php';

    }

    public function registrarCuenta()
    {

        $this->mdlLogin->__SET("nombre_usuario", $_POST["txtname"]);
        $this->mdlLogin->__SET("contraseña", $_POST["txtpass"]);
        $this->mdlLogin->__SET("correo_electronico", $_POST["txtmail"]);
        $this->mdlLogin->__SET("imagen", $_POST["exampleInputFile"]);
        $this->mdlLogin->__SET("Rol_idrol", $_POST["txtrol"]);
        $very= $this->mdlLogin->insertarCuenta();



    header('location: ' . URL . 'login');

    }

    public function logueo()
    {
        // if we have an id of a song that should be deleted
        if (isset($_POST["btnLogin"])) {
            // do deleteSong() in model/model.php
            $v=$this->mdlLogin->logueo($_POST["user_login"], $_POST["pass_login"]);

            if ($v != false) {

              header('location: ' . URL . 'home/index');

            }else {
              echo '<script language="javascript">alert("Usuario o Clave Incorrectas");</script>';
              header('location: ' . URL . 'login');

            }
        }

    }
}

 ?>
