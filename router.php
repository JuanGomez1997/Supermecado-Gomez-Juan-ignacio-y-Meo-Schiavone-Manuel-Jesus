<?php 
    require_once './app/controlador/controladorProveedores.php';
    require_once './app/controlador/controladorUsuario.php';
    require_once './app/controlador/controladorProductos.php';
    require_once './app/helpers/helperAut.php';
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    $accion = 'inicio'; //accion por defecto
    if (!empty($_GET['accion'])) {
        $accion = $_GET['accion'];
    }
    $params = explode('/', $accion);
    // determina que camino seguir según la acción
    switch ($params[0]) {
        /////////////////////////////////////////////////////////////////////////////desdes aca juan
        case 'inicio':
            $ControladorProducto=new ControladorProductos;
            $ControladorProducto->listarProductos();
        break;
        
        case 'iniciosesion'://form ingreso 
            $ControladorUsuario=new ControladorUsuario;
            $ControladorUsuario->ingreso();
            break;
        case 'accesoSesion'://inicio de sesion
            $ControladorUsuario=new ControladorUsuario;
            $ControladorUsuario->accesoSesion();
            break;
        case 'cerrarsesion'://cerrar sesiom
            $ControladorUsuario = new ControladorUsuario;
            $ControladorUsuario->cerrarSesion();
            break;
        case 'proveedores'://se puede cambiar y poner el listado de productos
            $ControladorProveedor=new ControladorProveedores;
            $ControladorProveedor->listarProveedores();
            break;
        case 'proveedoresporid'://se puede cambiar y poner el listado de productos
            $ControladorProveedor=new ControladorProveedores;
            $ControladorProveedor->listarProveedoresPorID($params[1]);
            break;
        case 'agregarproveedor':
            $ControladorProveedor=new ControladorProveedores;
            $ControladorProveedor->añadirProveedor();
            break;
        case 'editarproveedor':
            $ControladorProveedor=new ControladorProveedores;
            $ControladorProveedor->editarProveedor($params[1]);
            break;
        case 'eliminarproveedor':
            $ControladorProveedor=new ControladorProveedores;
            $ControladorProveedor->eliminarProveedor($params[1]);
            break;
        ////////////////////////////////////////////////////////////////////////////Hasta aca juan
        case 'agregarproducto'://form ingreso 
            $ControladorProducto=new ControladorProductos;
            $ControladorProducto->añadirProducto();
            break;
        case 'eliminarproducto'://form ingreso 
             $ControladorProducto=new ControladorProductos;
             $ControladorProducto->borrarProducto($params[1]);
            break;
        case 'productosporid'://form ingreso 
                $ControladorProducto=new ControladorProductos;
                $ControladorProducto->verProducto($params[1]);
            break;    
        case 'editarproducto':// 
                $ControladorProducto=new ControladorProductos;
                $ControladorProducto->editarProducto($params[1]);
            break;
        default:
         $ControladorUsuario=new ControladorUsuario;
            $ControladorUsuario->mostrar404();
            break;
    }