<?php
//Crear la clase
class mdlTipoCliente{

    //atributos
    public $idTC;
    public $Descripcion;
    public $db;
    //El constructor se encarga de la conexion

    function __construct($db){
        $this->db = $db;
    }

    //creamos los métodos de fijar y obtener datos

    public function __SET($atributo, $valor){
        $this->atributo =$valor;
    }

    public function __GET($atributo){
        return $this->$atributo;
    }

    //método para crear

    public function crearTiposClientes(){
        //definir la variable que guarda la consulta
        $sql="INSERT INTO tipocliente(Descripcion) VALUES (?)";
        //crear la variable para enviar los datos
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Descripcion);
        return $stm->execute();
    }


     //listar tipocliente
     public function listarTiposClientes(){
        $sql = "SELECT idTC, Descripcion FROM tipocliente";
        $query = $this->db->prepare($sql);
        $query -> execute();
        $tipoC = $query->fetchAll(PDO::FETCH_ASSOC);
        return $tipoC;
    }

    public function modificarTiposClientes(){
        //definir la variable que guarda la consulta
        $sql="UPDATE tipocliente SET Descripcion=? WHERE idTC=?";
        //Crear ka variable para enviar los datos
        $stm= $this->db->prepare($sql);
        $stm->bindParam(1, $this->Descripcion);
        $stm->bindParam(2, $this->idTC);
        return $stm->execute();


    }

}
?>