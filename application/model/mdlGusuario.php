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
    private $Pension_idPension;
    private $Caja_compensacion_idCaja_compensacion;
    private $Tipo_contrato_idTipo_contrato;
    private $direccion;
    private $barrio;
    private $municipio;
    private $Tipo_documento_idTipo_documento;
    private $Genero_idGenero;
    private $Cuenta_idCuenta;
    private $cesantias;
    private $procesos;
    private $cargo;
    private $EPS_idEPS;
    private $Nivel_estudio_idNivel_estudio;
    private $Profesion_idProfesion;
    private $Empleado_idEmpleado;
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
    public function insertarEmpleado(){
        $sql = "CALL SP_InsertarEmpleado(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->bindParam(2, $this->nombres);
        $stm->bindParam(3, $this->apellidos);
        $stm->bindParam(4, $this->rh);
        $stm->bindParam(5, $this->celular);
        $stm->bindParam(6, $this->fecha_nacimiento);
        $stm->bindParam(7, $this->correo_electronico);
        $stm->bindParam(8, $this->fecha_ingreso);
        $stm->bindParam(9, $this->numero_hijos);
        $stm->bindParam(10, $this->telefono_fijo);
        $stm->bindParam(11, $this->Pension_idPension);
        $stm->bindParam(12, $this->Caja_compensacion_idCaja_compensacion);
        $stm->bindParam(13, $this->Tipo_contrato_idTipo_contrato);
        $stm->bindParam(14, $this->direccion);
        $stm->bindParam(15, $this->barrio);
        $stm->bindParam(16, $this->municipio);
        $stm->bindParam(17, $this->Tipo_documento_idTipo_documento);
        $stm->bindParam(18, $this->Genero_idGenero);
        $stm->bindParam(19, $this->Cuenta_idCuenta);
        $stm->bindParam(20, $this->cesantias);
        $stm->bindParam(21, $this->procesos);
        $stm->bindParam(22, $this->cargo);
       $stm->execute();
    }

    public function insertarDetalleEps(){
        $sql = "CALL SP_InsertarEmpleadoEps(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Empleado_idEmpleado);
        $stm->bindParam(2, $this->EPS_idEPS);
        return $stm->execute();
    }

    public function insertarDetalleNivel(){
        $sql = "CALL SP_InsertarEmpleadoNivelestudio(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->bindParam(2, $this->Nivel_estudio_idNivel_estudio);
        return $stm->execute();
    }

    public function insertarDetalleProfesion(){
        $sql = "CALL SP_InsertarEmpleadoProfesion(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->bindParam(2, $this->Profesion_idProfesion);
        return $stm->execute();
    }

    public function listar(){
        $sql = "CALL SP_ListarEmpleado()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function modificar(){
        $sql = "CALL SP_ModificarEmpleado(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->bindParam(2, $this->nombres);
        $stm->bindParam(3, $this->apellidos);
        $stm->bindParam(4, $this->rh);
        $stm->bindParam(5, $this->celular);
        $stm->bindParam(6, $this->fecha_nacimiento);
        $stm->bindParam(7, $this->correo_electronico);
        $stm->bindParam(8, $this->fecha_ingreso);
        $stm->bindParam(9, $this->numero_hijos);
        $stm->bindParam(10, $this->telefono_fijo);
        $stm->bindParam(11, $this->Pension_idPension);
        $stm->bindParam(12, $this->Caja_compensacion_idCaja_compensacion);
        $stm->bindParam(13, $this->Tipo_contrato_idTipo_contrato);
        $stm->bindParam(14, $this->direccion);
        $stm->bindParam(15, $this->barrio);
        $stm->bindParam(16, $this->municipio);
        $stm->bindParam(17, $this->Tipo_documento_idTipo_documento);
        $stm->bindParam(18, $this->Genero_idGenero);
        $stm->bindParam(19, $this->Cuenta_idCuenta);
        $stm->bindParam(20, $this->cesantias);
        $stm->bindParam(21, $this->procesos);
        $stm->bindParam(22, $this->cargo);
        return $stm->execute();
    }

    public function modificarEstado(){
        $sql = "CALL SP_ModificarEstadoEmpleado(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idEmpleado);
        $stm->bindParam(2,$this->estado);
        return $stm->execute();

    }

    public function consultarUno(){
        $sql = "SELECT nombres, apellidos, rh, celular, fecha_nacimiento, correo_electronico, fecha_ingreso, numero_hijos, telefono_fijo, Pension_idPension, Caja_compensacion_idCaja_compensacion, Tipo_contrato_idTipo_contrato, direccion, barrio, municipio, Tipo_documento_idTipo_documento, Genero_idGenero, Cuenta_idCuenta, cesantias, procesos, cargo FROM empleado WHERE idEmpleado = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->execute();
        return $stm->fetch();
    }
}

?>
