<?php

class mdlNivelEstudio
{
    private $idNivel_estudio;
    private $descripcion;

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

            $this->db=$db;
        }catch (PDOException $e){
            exit("La conexion a la base de datos no fue establecida.");

        }

    }
    public function insertarNivel(){
        $sql = "CALL SP_InsertarNivelEstudio(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idNivel_estudio);
        $stm->bindParam(2, $this->descripcion);
        return $stm->execute();
    }

  //  public function insertarDetalleEps(){
        //$sql = "CALL SP_InsertarEmpleadoEps(?,?)";
      //  $stm = $this->db->prepare($sql);
        //$stm->bindParam(1, $this->idEmpleado);
        //$stm->bindParam(2, $this->EPS_idEPS);
        //return $stm->execute();
    //}

    public function listarNivel(){
        $sql = "CALL SP_ListarNivelEstudio()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function modificarNivel(){
        $sql = "CALL SP_ModificarNivelEstudio(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idNivel_estudio);
        $stm->bindParam(2, $this->descripcion);

        return $stm->execute();
    }


    public function consultarUno(){
        $sql = "SELECT descripcion FROM nivel_estudio WHERE idNivel_estudio = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idNivel_estudio);
        $stm->execute();
        return $stm->fetch();
    }
}

?>
