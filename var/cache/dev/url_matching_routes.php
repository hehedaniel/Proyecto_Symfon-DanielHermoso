<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app__homepage', '_controller' => 'App\\Controller\\Controller::homepage'], null, null, null, false, false, null]],
        '/anadir' => [[['_route' => 'productos_anadir', '_controller' => 'App\\Controller\\Controller::productosAnadir'], null, null, null, false, false, null]],
        '/buscar' => [[['_route' => 'productos_buscar', '_controller' => 'App\\Controller\\Controller::productosBuscar'], null, null, null, false, false, null]],
        '/buscard' => [[['_route' => 'producto_mostrar', '_controller' => 'App\\Controller\\Controller::productosBuscadoMostrar'], null, ['GET' => 0], null, false, false, null]],
        '/actualizar' => [[['_route' => 'actualizar_producto', '_controller' => 'App\\Controller\\Controller::modificarProducto'], null, null, null, false, false, null]],
        '/eliminar' => [[['_route' => 'eliminar_producto', '_controller' => 'App\\Controller\\Controller::mostrarProductos'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
