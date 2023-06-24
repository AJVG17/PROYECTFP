<?php
//Heredar del modelo Principal si es necesario
require_once "mdlPersona.php";

//heredamos la clase
class mdlCliente extends mdlPersona{

    //los atributos
    private $idCliente;
    private $idTipoCliente;
    private $descripcion;
    private $estado;
    public $db;

     //crear el constructor para la conexion con la base de datos
    /*function __construct($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit("Error al conectar a la base de datos");
        }
    }*/

    //fijar datos
    public function __SET($atributo, $valor){
        $this->$atributo = $valor;
    }

    //pedir datos
    public function __GET($atributo){
        return $this->$atributo;
    }


    //metodo para registrar cliente
    public function registrarCliente(){
        $sql = "INSERT INTO clientes(idPersona, idTipoCliente, estado)VALUES (?,?,?)";

        //para cambio de estado
        $estado = 1;

        //vamos a enviar los valores o parámetros
        $stm = $this->db->prepare($sql);
        $stm -> bindParam(1, $this->idPersona);
        $stm -> bindParam(2, $this->idTipoCliente);
        $stm -> bindParam(3, $estado);

        $resultado = $stm->execute();
        return $resultado;
    }

    //metodo para listar los Clientes
    public function listarClientes(){
        $sql = "SELECT P.idPersona, P.idTipoDocumento, P.Documento, P.Nombres, P.Apellidos, P.Email, P.Telefono, P.Direccion, P.Genero, P.Fecha_Nacimiento, C.idCliente, C.estado, T.Descripcion, C.idTipoCliente FROM personas AS P INNER JOIN clientes AS C ON P.idPersona = C.idPersona INNER JOIN tipocliente AS T ON T.idTC = C.idTipoCliente ORDER BY idCliente";

        $stm  = $this->db->prepare($sql);
        $stm -> execute();
        $customer = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $customer;
    }

    //filtrar Clientes
    public function clienteId($id){
        $sql = "SELECT P.idPersona, P.Documento, P.idTipoDocumento, P.Nombres, P.Apellidos, P.Email, P.Telefono, P.Direccion, P.Genero, P.Fecha_Nacimiento, C.idCliente, T.Descripcion, C.idTipoCliente FROM personas AS P INNER JOIN clientes AS C ON P.idPersona = C.idPersona INNER JOIN tipocliente AS T ON T.idTC = C.idTipoCliente WHERE idCliente = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //listar tipocliente
    public function listarTiposClientes(){
        $sql = "SELECT idTC, Descripcion FROM tipocliente";
        $query = $this->db->prepare($sql);
        $query -> execute();
        $tipoC = $query->fetchAll(PDO::FETCH_ASSOC);
        return $tipoC;
    }

    //Metodo para cambiar el estado
    public function cambiarEstado($id){
        $sql = "UPDATE clientes SET estado = (CASE WHEN estado = 1 THEN 0 ELSE 1 END) WHERE idCliente = ?";
        $query = $this->db->prepare($sql);
        $query ->bindParam(1, $id);
        return $query->execute();
    }

    //metodo para eliminar
    public function eliminarCliente($id){
        $sql = "DELETE c, p FROM clientes AS c INNER JOIN personas AS p WHERE p.idPersona = c.idPersona AND c.idCliente = ?";

        $query = $this ->db->prepare($sql);
        $query ->bindParam(1, $id);
        return $query->execute();
    }

    //metodo para modificar u actualizar
    public function modificarCliente(){
        $sql = "UPDATE personas AS P INNER JOIN clientes AS C ON P.idPersona = C.idPersona INNER JOIN tipocliente AS T ON C.idTipoCliente = T.idTC SET P.idTipoDocumento = ?, P.Documento = ?, P.Nombres = ?, P.Apellidos = ?, P.Telefono = ?, P.Direccion = ?, P.Email = ?, P.Genero = ?, P.Fecha_Nacimiento = ?, C.idTipoCliente = ? WHERE C.idCliente = ?";

        $query = $this->db->prepare($sql);
        $query ->bindParam(1, $this->idTipoDocumento);
        $query ->bindParam(2, $this->documento);
        $query ->bindParam(3, $this->nombres);
        $query ->bindParam(4, $this->apellidos);
        $query ->bindParam(5, $this->telefono);
        $query ->bindParam(6, $this->direccion);
        $query ->bindParam(7, $this->email);
        $query ->bindParam(8, $this->genero);
        $query ->bindParam(9, $this->fechaNacimiento);
        $query ->bindParam(10, $this->idTipoCliente);
        $query ->bindParam(11, $this->idCliente);
    

        $resultado = $query -> execute();
        return $resultado;
    }
}
?>