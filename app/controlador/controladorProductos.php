<?php
    require_once './app/modelo/modeloProductos.php';
    require_once './app/vista/vistaProductos.php';
    require_once './app/helpers/helperAut.php';
    class ControladorProductos{
        private $vistaProductos;
        private $modeloProductos;
        public function __construct() {
            $this->vistaProductos = new VistaProductos();
            $this->modeloProductos = new ModeloProductos();
        }
        public function listarProductos() {
            AutHelper::init();
            $productos = $this->modeloProductos->obtenerProductos();
            $this->vistaProductos->mostrarProductos($productos);
        }
    }
?>
