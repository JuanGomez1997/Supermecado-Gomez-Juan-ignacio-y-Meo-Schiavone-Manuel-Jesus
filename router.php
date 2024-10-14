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
        case 'inicio':
            $Controller->listarProveedores();
            break;
        
        default:
            echo('404 Page not found');
            break;
    }