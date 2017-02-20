<?php

class mdlLote
{
    private $Cod;
    private $Descripcion;
    private $Cantidad;
    private $Fecha;
    private $db;

    public function __SET($attr, $val){
        this->$attr = $val;
    }
    public function __GET($attr){
        return $this->$attr;
    }

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function listar(){
        $sql = "CALL `SP_ListarLote`();";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
           }

    public function modificar(){
        $sql = "CALL `SP_ModificarLote`(?,?,?,?);";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->"Cod");
         $stm->bindParam(2, $this->"Descripcion");
          $stm->bindParam(3, $this->"Cantidad");
           $stm->bindParam(4, $this->"Fecha");

       return $stm->execute();
 
           }

    public function consultarUno(){
        $sql = "SELECT Descripcion, Cantidad, Fecha FROM lote WHERE Cod = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->"Cod");
        $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);
 
           }






   