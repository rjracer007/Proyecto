<?php

class mdlEps
{
    private $idEPS;
    private $nombre;
    private $abreviatura;
    private $fecha_ingreso;
    private $fecha_retiro;
    private $Empleado_idEmpleado;
    private $EPS_idEPS;
    private $db;

    public function __SET($attr,$value){
        $this->$attr = $value;
    }

    public function __GET($attr){
       return $this->$attr;
    }


    function __construct($db)
    {
        try{

            $this->db= $db;
        }catch (PDOException $e){
            exit("La conexion a la base de datos no fue establecida.");

        }

    }
    public function insertarEps(){
        $sql = "CALL SP_InsertarEps(?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEPS);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->abreviatura);
        $stm->bindParam(4, $this->fecha_ingreso);
        $stm->bindParam(5, $this->fecha_retiro);
        return $stm->execute();
    }

  public function insertarDetalleEps(){
        $sql = "CALL SP_InsertarEmpleadoEps(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Empleado_idEmpleado);
        $stm->bindParam(2, $this->EPS_idEPS);
        return $stm->execute();
    }

    public function listarEps(){
        $sql = "CALL SP_ListarEps()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function modificarEps(){
        $sql = "CALL SP_ModificarEps(?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEPS);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->abreviatura);
        $stm->bindParam(4, $this->fecha_ingreso);
        $stm->bindParam(5, $this->fecha_retiro);
        return $stm->execute();
    }


    public function consultarUno(){
        $sql = "SELECT nombre, abreviatura, fecha_ingreso, fecha_retiro FROM eps WHERE idEPS = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEPS);
        $stm->execute();
        return $stm->fetch();
    }
}

?>
