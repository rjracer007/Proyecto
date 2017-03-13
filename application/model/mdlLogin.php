<?php

class mdlLogin
{

    private $_idCuenta;
    private $_nombre_usuario;
    private $_contraseña;
    private $_correo_electronico;
    private $_imagen;
    private $_estado;
    private $_Rol_idrol;
    private $db;

    public function __SET($attr, $val){

            $this->$attr = $val;
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

    public function insertarCuenta()
    {
          $_contraseña = md5($_contraseña);
        $sql = "CALL SP_InsertarCuenta(?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->_nombre_usuario);
        $stm->bindParam(2, $this->_contraseña);
        $stm->bindParam(3, $this->_correo_electronico);
        $stm->bindParam(4, $this->_imagen);
        $stm->bindParam(5, $this->_Rol_idrol);
        return $stm->execute();
    }

    public function modificarCuenta()
    {
        $sql = "CALL SP_ModificarCuenta(?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->_nombre_usuario);
        $stm->bindParam(2, $this->_contraseña);
        $stm->bindParam(3, $this->_correo_electronico);
        $stm->bindParam(4, $this->_imagen);
        $stm->bindParam(5, $this->_Rol_idrol);
        return $stm->execute();
    }

    public function listarCuenta(){
  		$sql = "CALL SP_ListarCuenta";
  		$stm = $this->db->prepare($sql);
  		$stm->execute();
  		return $stm->fetchAll(PDO::FETCH_ASSOC);
  	}

    public function consultarUno()
    {

        $sql = "SELECT idCuenta, nombre_usuario, contraseña, correo_electronico, imagen, estado, Rol_idrol FROM cuenta WHERE idCuenta = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->$_idCuenta);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    //public function pintarPagina(){

           //$sql = "SELECT r.ruta, r.nombre  from rol_has_ruta pr INNER JOIN ruta r ON r.idruta = pr.Ruta_idruta WHERE pr.Rol_idrol =?";
           //$stm = $this->db->prepare($sql);
           //$stm->bindParam(1, $this->__GET("_Rol_idrol"));
           //$stm->execute();
           //return $stm->fetch(PDO::FETCH_ASSOC);
         //}


    //public function logueo(){

           //$sql = "SELECT idCuenta, nombre_usuario, contraseña, correo_electronico, Rol_idrol from cuenta where nombre_usuario = ? and contraseña = ?";
           //$stm = $this->db->prepare($sql);
          // $stm->bindParam(1, $this->__GET("_nombre_usuario"));
          // $stm->execute();
          // return $stm->fetch(PDO::FETCH_ASSOC);
        // }

  public function logueo($_nombre_usuario, $_contraseña){
                  $claveE = md5($_contraseña);
                  $sql = "SELECT * from cuenta where nombre_usuario = ? and contraseña = ?";
                  $stm = $this->db->prepare($sql);
                  $stm->bindParam(1, $_nombre_usuario);
                  $stm->bindParam(2, $claveE);
                  $stm->execute();
                  return $stm->fetch();

                }


}
