<?php

class mdlTipoContrato
{

    private $idTipo_contrato;
    private $descripcion;
    private $db;

    public function __SET($attr, $value){
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

    public function insertarContrato(){
        $sql = "CALL SP_InsertarTipoContrato(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idTipo_contrato);
        $stm->bindParam(2, $this->descripcion);
        return $stm->execute();
    }

    public function eliminarContrato(){
        $sql = "CALl SP_EliminarTipoContrato(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idTipo_contrato);
        return $stm->execute();
    }

    public function listar4(){
        $sql = "CALL SP_ListarTipoContrato()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarUno()
    {
        $sql = "SELECT  idTipo_contrato, descripcion FROM tipo_contrato WHERE idTipo_contrato = ? ";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idTipo_contrato);
        $stm -> execute();
        return $stm ->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
