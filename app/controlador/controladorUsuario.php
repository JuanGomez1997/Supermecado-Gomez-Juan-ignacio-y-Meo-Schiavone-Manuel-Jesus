<?php
    require_once './app/vista/vistaUsuario.php';
    require_once './app/modelo/modeloUsuario.php';
    require_once './app/helpers/helperAut.php';

    class ControladorUsuario{
        private $ModeloUsuario;
        private $vistaUsuario;
        
        public function __construct(){
            $this->ModeloUsuario=new ModeloUsuario;
            $this->vistaUsuario=new VistaUsuario;
        }

        public function ingreso(){
            $this->vistaUsuario->mostrarIngreso();
        }

        public function accesoSesion(){
            $nombre=$_POST['nombre'];
            $contrasenia=$_POST['contrasenia'];
            if (empty($nombre) || empty($contrasenia)) {
                $this->vistaUsuario->mostrarIngreso('faltan campos por completar');
                return;
            }
            $usuario = $this->ModeloUsuario->obtenerNombre($nombre);
            var_dump($usuario);
            if ($usuario && password_verify($contrasenia, $usuario->contrasenia)) {
            
                AutHelper::login($usuario);
                header('location: ' . BASE_URL.'proveedores');
                exit();
            }
            else {
                $this->vistaUsuario->mostrarIngreso('Usuario inválido');
            }
        }

        public function serraSesion() {
            AutHelper::logout();
            header('Location: ' . BASE_URL.'proveedores');    
        }
    
        public function mostrar404() {
            $this->vistaUsuario->mostrar404();
        }
        
    }
?>