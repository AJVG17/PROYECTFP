<?php
//crearmos y heredamos la clase del controlador
class clienteController extends Controller{
    //atributos 
    private $modeloC;

    //crear el constructor
    public function __construct(){
        //instanciar los modelos
        $this->modeloC = $this->loadModel("mdlCliente");

    }

    //método para cargar la página administrativa
    public function principal(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/cliente/principal.php';
        require APP . 'view/_templates/footer.php';
    }


    public function listarClientes(){
        if(isset($_POST['btnEditarC'])){
            
            $this->modeloC->__SET('idTipoDocumento', $_POST['selTiposDocumentos']);
            $this->modeloC->__SET('documento', $_POST['txtDocumento']);
            $this->modeloC->__SET('nombres', $_POST['txtNombres']);
            $this->modeloC->__SET('apellidos', $_POST['txtApellidos']);
            $this->modeloC->__SET('telefono', $_POST['txtTelefono']);
            $this->modeloC->__SET('direccion', $_POST['txtDireccion']);
            $this->modeloC->__SET('email', $_POST['txtEmail']);
            $this->modeloC->__SET('genero', $_POST['txtGenero']);
            $this->modeloC->__SET('fechaNacimiento', $_POST['txtFechaNacimiento']);
            $this->modeloC->__SET('idTipoCliente', $_POST['selTiposClientes']);
            $this->modeloC->__SET('idCliente', $_POST['txtIdCliente']);
            

            $update = $this->modeloC->modificarCliente();

            if($update == true){
                $_SESSION["alerta"] = "Swal.fire({
                    position: '', 
                    icon: 'success',
                    title: 'Actualización Exitosa',
                    showConfirmButton: false,
                    timer: 1500})";

                    header("Location:".URL."clienteController/listarClientes");
                    exit();
            }else{
                $_SESSION["alerta"] = "Swal.fire({
                    position: '', 
                    icon: 'error',
                    title: 'Ha ocurrido un error',
                    showConfirmButton: false,
                    timer: 1500})";

                    header("Location:".URL."clienteController/listarClientes");
                    exit();
            }
        }

        $listarcliente = $this->modeloC->listarClientes();
        $listarTiposClientes = $this->modeloC->listarTiposClientes();
        $tiposDocumentos = $this->modeloC->listarTipoDocumento();

        require APP . 'view/_templates/header.php';
        require APP . 'view/cliente/listarClientes.php';
        require APP . 'view/_templates/footer.php';
    }

    public function registrarCliente(){
        if(isset($_POST['btnGuardarC'])){
            $estado=1;
            $this->modeloC->__SET('idTipoDocumento', $_POST['selTiposDocumentos']);
            $this->modeloC->__SET('documento', $_POST['txtDocumento']);
            $this->modeloC->__SET('nombres', $_POST['txtNombres']);
            $this->modeloC->__SET('apellidos', $_POST['txtApellidos']);
            $this->modeloC->__SET('telefono', $_POST['txtTelefono']);
            $this->modeloC->__SET('direccion', $_POST['txtDireccion']);
            $this->modeloC->__SET('email', $_POST['txtEmail']);
            $this->modeloC->__SET('genero', $_POST['txtGenero']);
            $this->modeloC->__SET('fechaNacimiento', $_POST['txtFechaNacimiento']);
            $this->modeloC->__SET('estado', $estado);
            
            $persona = $this->modeloC->registrarPersona();

            if($persona == true){
                $ultimoId = $this->modeloC->ultimoIdPersona();
                foreach ($ultimoId as $value){
                    $ultimoIdValue = $value['ultimoIdPersona'];
                }
            }

            $this->modeloC->__SET('idPersona', $ultimoIdValue);
            $this->modeloC->__SET('idTipoCliente', $_POST['selTiposClientes']);
          

            $cliente = $this->modeloC->registrarCliente();

            if($persona == true && $cliente == true){
                $_SESSION["alerta"] = "Swal.fire({
                    position: '', 
                    icon: 'success',
                    title: 'Registro Exitoso',
                    showConfirmButton: false,
                    timer: 1500})";

                    header("Location:".URL."clienteController/listarClientes");
                    exit();
            }else{
                $_SESSION["alerta"] = "Swal.fire({
                    position: '', 
                    icon: 'error',
                    title: 'Ha ocurrido un error',
                    showConfirmButton: false,
                    timer: 1500})";

                    header("Location:".URL."clienteController/registrarCliente");
                    exit();
            }
        }

        $listarTiposClientes = $this->modeloC->listarTiposClientes();
        $tiposDocumentos = $this->modeloC->listarTipoDocumento();
        $listarcliente = $this->modeloC->listarClientes();

        require APP . 'view/_templates/header.php';
        require APP . 'view/cliente/crearCliente.php';
        require APP . 'view/_templates/footer.php';
    }

    public function dataCliente(){
        //crear un variable para controlar
        $cliente = $this->modeloC->clienteId($_POST['id']);
        echo json_encode($cliente);
    }

    public function cambiarEstado(){
        $estado = $this->modeloC->cambiarEstado($_POST['id']); 
        echo 1;
    }

    public function eliminarCliente(){
        $estado = $this->modeloC->eliminarCliente($_POST['id']); 
        echo 1;
    }
}
?>