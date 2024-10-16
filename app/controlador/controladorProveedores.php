<?php
    require_once 'app/modelo/modeloProveedores.php';
    require_once 'app/vista/vistaProveedores.php';
    require_once 'app/modelo/modeloProductos.php';

    class ControladorProveedores{
        private $vistaProveedores;
        private $modeloProveedores;
        private $modeloProductos;
        public function __construct() {
            $this->vistaProveedores = new VistaProveedores();
            $this->modeloProveedores = new ModeloProveedores();
            $this->modeloProductos = new ModeloProductos();
        }
        public function listarProveedores() {
            $proveedor = $this->modeloProveedores->obtenerProveedores();
            $this->vistaProveedores->mostrarProveedores($proveedor);
        }

        public function listarProveedoresPorID($id) {
            $proveedores = $this->modeloProveedores->obtenerProveedoresId($id);
            $productos = $this->modeloProductos->obtenerProductosId($id);
            $this->vistaProveedores->mostrarListaProductoPorProveedor($id,$proveedores,$productos);
        }

        public function añadirProveedor(){
            if (isset($_POST['nombre'])){
                if (empty($_POST['nombre'])){
                    $this->vistaProveedores->mostrarError("Datos incompletos");
                    return;
                }
                $proveedor=$_POST['nombre'];
                $this->modeloProveedores->agregarProveedor($proveedor);
                header("Location: " . BASE_URL."proveedores");
            }
        }

        public function editarProveedor($id){
            if (isset($_POST['nombre'])){
                if (empty($_POST['nombre'])){
                    $this->vistaProveedores->mostrarError("Datos incompletos");
                    return;
                }
                $proveedor=$_POST['nombre'];
                $this->modeloProveedores->actualizarProveedor($proveedor,$id);
                header("Location: " . BASE_URL."proveedores");
            }
        }

        public function eliminarProveedor($id){
            try {
                $this->modeloProveedores->eliminarProveedor($id);
                header("Location: " . BASE_URL."proveedores");
            } catch(Exception $e) {
                $error = 'No se puede eliminar al proveedor porque tiene productos,si quiere eliminarlo por favor vacielo de productos';
                $this->vistaProveedores->mostrarError($error);
            }
        }

    }
?>