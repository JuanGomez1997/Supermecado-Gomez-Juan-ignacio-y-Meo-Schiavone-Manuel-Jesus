<?php 
    require_once './app/controlador/controladorProveedores.php';
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    $accion = 'inicio'; //accion por defecto
    if (!empty($_GET['accion'])) {
        $accion = $_GET['accion'];
    }
    $params = explode('/', $accion);
    $Controller=new ControladorProveedores;

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'inicio'://se puede cambiar y poner el listado de productos
            echo"inicio";
        break;

        case 'proveedores'://se puede cambiar y poner el listado de productos
            $Controller->listarProveedores();
            break;
        case 'agregarproveedor':
            $Controller->añadirProveedor();
            break;
        case 'editarproveedor':
            $Controller->editarProveedor($params[1]);
            break;
        case 'eliminarproveedor':
            $Controller->eliminarProveedor($params[1]);
            break;
        default:
            echo('404 Page not found');
            break;
    }