<?php

class Gusuario extends Controller
{

  private $mdlGenero;
  private $mdlTipoDocumento;
  private $mdlPension;
  private $mdlTipoContrato;
  private $mdlGusuario;
  private $mdlEps;
  private $mdlProfesion;
  private $mdlNivelEstudio;



  function __construct()
	{
    $this->mdlGenero = $this->loadModel("mdlGenero");
    $this->mdlTipoDocumento = $this->loadModel("mdlTipoDocumento");
    $this->mdlPension = $this->loadModel("mdlPension");
    $this->mdlTipoContrato = $this->loadModel("mdlTipoContrato");
		$this->mdlGusuario = $this->loadModel("mdlGusuario");
    $this->mdlEps = $this->loadModel("mdlEps");
    $this->mdlNivelEstudio = $this->loadModel("mdlNivelEstudio");
    $this->mdlProfesion = $this->loadModel("mdlProfesion");
	}

    public function index()
    {
        $empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();
        //$empleado = $this->mdlGusuario->listar();

        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/index.php';
        require APP . 'view/_templates/footer.php';
    }


    public function registrar()
    {
        $genero = $this->mdlGenero->listar1();
        $documento = $this->mdlTipoDocumento->listar2();
        $pension = $this->mdlPension->listar3();
        $tc = $this->mdlTipoContrato->listar4();
        $eps = $this->mdlEps->insertarEps();
        $ne = $this->mdlNivelEstudio->insertarNivel();
        $p = $this->mdlProfesion->insertarProfesion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/registrar.php';
        require APP . 'view/_templates/footer.php';
    }
    public function editar($id)
    {
        $this->mdlGusuario->__SET("idEmpleado",$id);
        $empleado = $this->mdlGusuario->consultarUno();

        require APP . 'view/_templates/header.php';
        require APP . 'view/gusuario/editar.php';
        require APP . 'view/_templates/footer.php';
    }
    public function crear()
    {
        $this->mdlGusuario->__SET("idEmpleado", $_POST["txtid"]);
        $this->mdlGusuario->__SET("nombres", $_POST["txtname"]);
        $this->mdlGusuario->__SET("apellidos", $_POST["txtape"]);
        $this->mdlGusuario->__SET("celular", $_POST["txtcel"]);
        $this->mdlGusuario->__SET("rh", $_POST["tiprh"]);
        $this->mdlGusuario->__SET("fecha_nacimiento", $_POST["fena"]);
        $this->mdlGusuario->__SET("correo_electronico", $_POST["email"]);
        $this->mdlGusuario->__SET("fecha_ingreso", $_POST["fein"]);
        $this->mdlGusuario->__SET("numero_hijos", $_POST["numhijo"]);
        $this->mdlGusuario->__SET("telefono_fijo", $_POST["txtel"]);
        $this->mdlGusuario->__SET("direccion", $_POST["txtdir"]);
        $this->mdlGusuario->__SET("barrio", $_POST["txtbar"]);
        $this->mdlGusuario->__SET("municipio", $_POST["txtmuni"]);
        $this->mdlGusuario->__SET("cargo", $_POST["txtcargo"]);
        $this->mdlGusuario->__SET("cesantias", $_POST["txtcesa"]);
        $this->mdlGusuario->__SET("Pension_idPension", $_POST["txtpen"]);
        $this->mdlGusuario->__SET("Caja_compensacion_idCaja_compensacion", $_POST["caja"]);
        $this->mdlGusuario->__SET("Tipo_contrato_idTipo_contrato", $_POST["txtcontra"]);
        $this->mdlGusuario->__SET("procesos", $_POST["txtpross"]);
        $this->mdlGusuario->__SET("Tipo_documento_idTipo_documento", $_POST["tipdoc"]);
        $this->mdlGusuario->__SET("Genero_idGenero", $_POST["gene"]);
        $this->mdlGusuario->__SET("Cuenta_idCuenta", $_POST["txtcuenta"]);

        $this->mdlEps->__SET("idEPS", $_POST["txtideps"]);
        $this->mdlEps->__SET("nombre", $_POST["txtnomeps"]);
        $this->mdlEps->__SET("abreviatura", $_POST["txtabreeps"]);
        $this->mdlEps->__SET("fecha_ingreso", $_POST["txtfecineps"]);
        $this->mdlEps->__SET("fecha_retiro", $_POST["txtfecreeps"]);

        $this->mdlNivelEstudio->__SET("idNivel_estudio", $_POST["txtidne"]);
        $this->mdlNivelEstudio->__SET("descripcion", $_POST["txtdesnv"]);
        $this->mdlProfesion->__SET("idProfesion", $_POST["txtidp"]);
        $this->mdlProfesion->__SET("descripcion", $_POST["txtdesp"]);

        $IE = $this->mdlGusuario->insertarEmpleado();
        $IEPS = $this->mdlEps->insertarEps();
        $IN = $this->mdlNivelEstudio->insertarNivel();
        $IP = $this->mdlProfesion->insertarProfesion();
        header("location: ".URL."gusuario/index");
    }

    public function modificar()
    {
        $this->mdlGusuario->__SET("idEmpleado", $_POST["txtid"]);
        $this->mdlGusuario->__SET("nombres", $_POST["txtname"]);
        $this->mdlGusuario->__SET("apellidos", $_POST["txtape"]);
        $this->mdlGusuario->__SET("celular", $_POST["txtcel"]);
        $this->mdlGusuario->__SET("rh", $_POST["tiprh"]);
        $this->mdlGusuario->__SET("fecha_nacimiento", $_POST["fena"]);
        $this->mdlGusuario->__SET("correo_electronico", $_POST["email"]);
        $this->mdlGusuario->__SET("fecha_ingreso", $_POST["fein"]);
        $this->mdlGusuario->__SET("numero_hijos", $_POST["numhijo"]);
        $this->mdlGusuario->__SET("telefono_fijo", $_POST["txtel"]);
        $this->mdlGusuario->__SET("direccion", $_POST["txtdir"]);
        $this->mdlGusuario->__SET("barrio", $_POST["txtbar"]);
        $this->mdlGusuario->__SET("municipio", $_POST["txtmuni"]);
        $this->mdlGusuario->__SET("cargo", $_POST["txtcargo"]);
        $this->mdlGusuario->__SET("cesantias", $_POST["txtcesa"]);
        $this->mdlGusuario->__SET("Pension_idPension", $_POST["txtpen"]);
        $this->mdlGusuario->__SET("Caja_compensacion_idCaja_compensacion", $_POST["caja"]);
        $this->mdlGusuario->__SET("Tipo_contrato_idTipo_contrato", $_POST["txtcontra"]);
        $this->mdlGusuario->__SET("procesos", $_POST["txtpross"]);
        $this->mdlGusuario->__SET("Tipo_documento_idTipo_documento", $_POST["tipdoc"]);
        $this->mdlGusuario->__SET("Genero_idGenero", $_POST["gene"]);
        $this->mdlGusuario->__SET("Cuenta_idCuenta", $_POST["txtcuenta"]);

        $this->mdlEps->__SET("idEPS", $_POST["txtideps"]);
        $this->mdlEps->__SET("nombre", $_POST["txtnomeps"]);
        $this->mdlEps->__SET("abreviatura", $_POST["txtabreeps"]);
        $this->mdlEps->__SET("fecha_ingreso", $_POST["txtfecineps"]);
        $this->mdlEps->__SET("fecha_retiro", $_POST["txtfecreeps"]);

        $this->mdlNivelEstudio->__SET("idNivel_estudio", $_POST["txtidne"]);
        $this->mdlNivelEstudio->__SET("descripcion", $_POST["txtdesnv"]);

        $this->mdlProfesion->__SET("idProfesion", $_POST["txtidp"]);
        $this->mdlProfesion->__SET("descripcion", $_POST["txtdesp"]);

        $very = $this->mdlGusuario->modificar();
        $very = $this->mdlEps->modificarEps();
        $very = $this->mdlNivelEstudio->modificarNivel();
        $very = $this->mdlProfesion->modificarProfesion();
        header("location: ".URL."gusuario/index");
    }

    public function modificarEst()
    {
        $this->mdlGusuario->__SET("idEmpleado", $_POST["id"]);
        $this->mdlGusuario->__SET("estado", $_POST["estado"]);
        $very = $this->mdlGusuario->modificarEstado();
        if($very){
          echo json_encode(["v"=>1]);
        }else{
          echo json_encode(["v"=>0]);
        }
    }

}

 ?>
