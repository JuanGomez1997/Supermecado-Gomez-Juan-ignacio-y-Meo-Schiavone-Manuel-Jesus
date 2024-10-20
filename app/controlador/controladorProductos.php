<?php
    require_once './app/modelo/modeloProductos.php';
    require_once './app/vista/vistaProductos.php';
    require_once './app/helpers/helperAut.php';
    require_once './app/modelo/modeloProveedores.php';
    class ControladorProductos{
        private $vistaProductos;
        private $modeloProductos;
        private $modeloProveedores;
        public function __construct() {
            $this->vistaProductos = new VistaProductos();
            $this->modeloProductos = new ModeloProductos();
            $this->modeloProveedores = new ModeloProveedores();
        }
        public function listarProductos() {
            AutHelper::init();
            $productos = $this->modeloProductos->obtenerProductos();
            $proveeddores = $this->modeloProveedores->obtenerProveedores();
            $this->vistaProductos->mostrarProductos($productos,$proveeddores);
        }
        public function verProducto($id){
            AutHelper::init();
            $productos = $this->modeloProductos -> obtenerProductosId($id);
            $proveeddores = $this->modeloProveedores->obtenerProveedores();
            $this->vistaProductos->mostrarProducto ($id,$productos,$proveeddores);
        }
        public function añadirProducto(){
            AutHelper::verify();
            if (isset($_POST['producto']) && isset($_POST['precio'])  && isset($_POST['categoria'])  && isset($_POST['fecha_vencimiento']) && isset($_POST['marca']) && isset($_POST['proveedor_id'])){
                if (empty($_POST['producto']) || empty($_POST['precio']) || empty($_POST['categoria']) || empty($_POST['fecha_vencimiento']) || empty($_POST['marca']) || empty($_POST['proveedor_id'])){
                    $this->vistaProductos->mostrarError("Datos incompletos");
                    return;
                }
                $producto=$_POST['producto'];
                $precio=$_POST['precio'];
                $categoria=$_POST['categoria'];
                $fecha_vencimiento=$_POST['fecha_vencimiento'];
                $marca=$_POST['marca'];
                $proveedor_id=$_POST['proveedor_id'];
                    $this->modeloProductos->agregarProducto($producto , $precio , $categoria , $fecha_vencimiento , $marca , $proveedor_id);
                    header("Location: " . BASE_URL);
            }
        }

        public function editarProducto($id){
            AutHelper::verify();
            if (isset($_POST['producto']) && isset($_POST['precio'])  && isset($_POST['categoria'])  && isset($_POST['fecha_vencimiento']) && isset($_POST['marca']) && isset($_POST['proveedor_id'])){
                if (empty($_POST['producto']) || empty($_POST['precio']) || empty($_POST['categoria']) || empty($_POST['fecha_vencimiento']) || empty($_POST['marca']) || empty($_POST['proveedor_id'])){
                    $this->vistaProductos->mostrarError("Datos incompletos");
                    return;
                }
                $producto=$_POST['producto'];
                $precio=$_POST['precio'];
                $categoria=$_POST['categoria'];
                $fecha_vencimiento=$_POST['fecha_vencimiento'];
                $marca=$_POST['marca'];
                $proveedor_id=$_POST['proveedor_id'];
                    $this->modeloProductos->actualizarProducto( $producto , $precio , $categoria , $fecha_vencimiento , $marca , $proveedor_id , $id);
                    header("Location: " . BASE_URL);
            }
        }

        public function borrarProducto($id){
            AutHelper::verify();
            $this->modeloProductos->eliminarProducto($id);
            header('Location: ' . BASE_URL);
    
        }
    }
 ?>
 