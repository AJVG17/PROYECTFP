<?php 
//Crear la clase
class mdlProducto{

//los atributos
    public $idProducto;
    public $Nom_Producto;
    public $Precio;
    public $Estado;
    public $Cantidad;
    public $Garantia;
    public $Fecha_Garantia;
    public $Descripcion;
    public $idMarca;
    public $idCategoria;
    public $Serie;
    public $db;

//crear para fijar datos
    public function __SET($atributo, $valor){
        $this->$atributo = $valor;
    }

    //crear método para pedir los datos
    public function __GET($atributo){
        return $this->$atributo;
    }
    
    //crear el constructor para la conexion con la base de datos
    function __construct($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit("Error al conectar a la base de datos");
        }
    }

    public function crearProducto(){
        $sql="INSERT INTO productos(Nom_Producto, Precio, Estado, Cantidad, Garantia, Fecha_Garantia, Descripcion, idMarca, idCategoria, Serie) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Nom_Producto);
        $stm->bindParam(2, $this->Precio);
        $stm->bindParam(3, $this->Estado);
        $stm->bindParam(4, $this->Cantidad);
        $stm->bindParam(5, $this->Garantia);
        $stm->bindParam(6, $this->Fecha_Garantia);
        $stm->bindParam(7, $this->Descripcion);
        $stm->bindParam(8, $this->idMarca);
        $stm->bindParam(9, $this->idCategoria);
        $stm->bindParam(10, $this->Serie);

        return $stm->execute();
    }

    public function listarProductos(){
        $sql = "SELECT P.*,M.Nombre_Marca, C.Nombre_Categoria FROM productos AS P INNER JOIN categoria AS C ON C.idCategoria =  P.idCategoria INNER JOIN marcas AS M ON M.idMarca = P.idMarca ORDER BY idProducto";

        $stm = $this->db->prepare($sql);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    
    
    }

    public function modificarProducto(){
        $sql="UPDATE productos SET Nom_Producto=?, Precio=?, Estado=?, Cantidad=?, Garantia=?, Fecha_Garantia=?, Descripcion=?, idMarca=?, idCategoria=?, Serie=? WHERE idProducto=?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Nom_Producto);
        $stm->bindParam(2, $this->Precio);
        $stm->bindParam(3, $this->Estado);
        $stm->bindParam(4, $this->Cantidad);
        $stm->bindParam(5, $this->Garantia);
        $stm->bindParam(6, $this->Fecha_Garantia);
        $stm->bindParam(7, $this->Descripcion);
        $stm->bindParam(8, $this->idMarca);
        $stm->bindParam(9, $this->idCategoria);
        $stm->bindParam(10, $this->Serie);
        $stm->bindParam(11, $this->idProducto);

        return $stm->execute();
    }

    //Cambiar estado de producto
    public function cambiarEstado($id){
        $sql = "UPDATE productos SET Estado = (CASE WHEN Cantidad <=0 THEN 0 ELSE 1 END) WHERE idProducto =?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }
    
    //Metodo para obtener los datos del producto
    public function productoId($id){
        $sql = "SELECT P.* FROM productos AS P INNER JOIN marcas AS M ON P.idMarca= M.idMarca INNER JOIN categoria AS C ON P.idCategoria=C.idCategoria WHERE idProducto =?";
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
        return $query>fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarProducto($id){
        $sql = "DELETE FROM productos WHERE idProducto = ?";
        $stm = $this ->db->prepare($sql);
        $stm ->bindParam(1, $id);
        return $stm->execute();
    }

}
    
?>