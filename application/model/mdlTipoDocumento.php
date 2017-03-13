<?php

class mdlTipoDocumento
{

    private $idTipo_documento;
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

    public function insertarTipodoc(){
        $sql = "CALL SP_InsertarTipoDocumento(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idTipo_documento);
        $stm->bindParam(2, $this->descripcion);
        return $stm->execute();
    }

    public function eliminarTipodoc(){
        $sql = "CALL SP_EliminarTipoDocumento(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idTipo_documento);
        return $stm->execute();
    }

    public function listar2(){
        $sql = "CALL SP_ListarTipoDocumento()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarUno()
    {
        $sql = "SELECT  idTipo_documento, descripcion FROM tipo_documento WHERE idTipo_documento = ? ";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idTipo_documento);
        $stm -> execute();
        return $stm ->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
