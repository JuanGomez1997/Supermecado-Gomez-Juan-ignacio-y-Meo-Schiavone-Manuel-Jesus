<?php 
    require_once './app/controlador/controladorProveedores.php';
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    $accion = 'inicio'; //accion por defecto
    if (!empty($_GET['accion'])) {
        $accion = $_GET['accion'];
    }
    $params = explode('/', $accion);
    $ControladorProveedor=new ControladorProveedores;

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'inicio'://se puede cambiar y poner el listado de productos
            echo"inicio";
        break;
        /////////////////////////////////////////////////////////////////////////////desdes aca juan
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
        default:
            echo('404 Page not found');
            break;
    }