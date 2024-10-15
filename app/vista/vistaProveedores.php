<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class VistaProveedores{
        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); 
        }
        public function mostrarProveedores($proveedores){
            $this->smarty->assign('proveedores',$proveedores);
            $this->smarty->assign('opcion','agregar');
            $this->smarty->display('listadoProveedores.tpl');
        }
        
        

        public function mostrarListaProductoPorProveedor($id){
            $this->smarty->assign('opcion','editar');
            $this->smarty->display('formularioProveedores.tpl');
        }

        public function mostrarError($error){
            $this->smarty->assign('error', $error);
            $this->smarty->display('error.tpl');
        }
    }
    
?>