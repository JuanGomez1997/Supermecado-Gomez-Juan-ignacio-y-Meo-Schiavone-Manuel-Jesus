<?php
    require_once 'app/modelo/modeloProveedores.php';
    require_once 'app/vista/vistaProveedores.php';

    class ControladorProveedores{
        private $vistaProveedores;
        private $modeloProveedores;
        public function __construct() {
            $this->vistaProveedores = new VistaProveedores();
            $this->modeloProveedores = new ModeloProveedores();
        }
        public function listarProveedores() {
            $proveedor = $this->modeloProveedores->obtenerProveedores();
            $this->vistaProveedores->mostrarProveedores($proveedor);
        }
    }