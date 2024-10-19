<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class VistaProductos{
        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); 
        }
        public function mostrarProductos($articulos){
            $this->smarty->assign('articulos',$articulos);
            $this->smarty->display('listadoProductos.tpl');
        }
    }
        
        

        
    
?>