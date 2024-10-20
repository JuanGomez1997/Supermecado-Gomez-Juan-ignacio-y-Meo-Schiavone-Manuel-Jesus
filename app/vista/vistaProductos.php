<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class VistaProductos{
        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); 
        }
        public function mostrarProductos($articulos){
            $this->smarty->assign('articulos',$articulos);
            $this->smarty->assign('opcion','agregar');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('listadoProductos.tpl');
        }
        public function mostrarProducto ($id,$productos){
            $this->smarty->assign('id',$id);
            $this->smarty->assign('productos',$productos);
            $this->smarty->assign('opcion','editar');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('productoid.tpl');
        }
        public function mostrarError($error){
            $this->smarty->assign('error', $error);
            $this->smarty->display('error.tpl');
        }
    }
        
        

        
    
?>