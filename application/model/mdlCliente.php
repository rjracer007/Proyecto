<?php 

class mdlCliente
{

    private $idCliente;
    private $nombre;
    private $apellidos;
    private $nit;
    private $telefono;
    private $direccion;
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

    public function nuevoCliente(){
		$sql = "CALL SP_InsertarCliente(?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->bindParam(2, $this->nombre);
		$stm->bindParam(3, $this->apellidos);
		$stm->bindParam(4, $this->nit);
		$stm->bindParam(5, $this->telefono);
		$stm->bindParam(6, $this->direccion);
		return $stm->execute();
	}

	public function listarCliente(){
		$sql = "CALL SP_ListarCliente";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	public function modificarCliente(){
		$sql = "CALL SP_ModificarCliente(?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->bindParam(2, $this->nombre);
		$stm->bindParam(3, $this->apellidos);
		$stm->bindParam(4, $this->nit);
		$stm->bindParam(5, $this->telefono);
		$stm->bindParam(6, $this->direccion);
		return $stm->execute();
	}

	public function consultarUno(){
		$sql = "SELECT idCliente, nombre, apellidos, nit, telefono, direccion FROM cliente WHERE idCliente = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		$stm->execute();
		return $stm->fetch(PDO::FETCH_ASSOC); 
	}

	public function elimina(){
		$sql = "CALl SP_EliminarCliente(?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1, $this->idCliente);
		return $stm->execute();
	}


}

 ?>