<?php

class mdlGusuario
{
    private $idEmpleado;
    private $nombres;
    private $apellidos;
    private $rh;
    private $celular;
    private $fecha_nacimiento;
    private $correo_electronico;
    private $fecha_ingreso;
    private $numero_hijos;
    private $telefono_fijo;
    private $estado;
    private $cargo;
    private $cesantias;
    private $pension;
    private $caja_compensacion;
    private $tipo_contrato;
    private $proceso;
    private $direccion;
    private $barrio;
    private $municipio;
    private $tipo_documento;
    private $genero;
    private $cuenta;
    private $db;

    public function __set($attr,$value){
        $this->$attr = $value;
    }

    public function __get($attr){
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

    public function listar(){
        $sql = "CALL SP_ListarCliente()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
}

?>
