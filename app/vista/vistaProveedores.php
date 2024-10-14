<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class VistaProveedores{
        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); 
        }
        public function mostrarProveedores($proveedores){
            $this->smarty->assign('proveedores',$proveedores);
            $this->smarty->display('listadoProveedores.tpl');
        }
        
    }
    
?>