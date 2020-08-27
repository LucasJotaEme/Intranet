<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\GoogleController::login'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\GoogleController::logout'], null, null, null, false, false, null]],
        '/admin/nuevaNovedad' => [[['_route' => 'nuevaNovedad', '_controller' => 'App\\Controller\\NovedadesController::nuevaNovedad'], null, null, null, false, false, null]],
        '/user/sistemas' => [[['_route' => 'sistemas', '_controller' => 'App\\Controller\\SistemaController::sistemas'], null, null, null, false, false, null]],
        '/admin/nuevoSistema' => [[['_route' => 'nuevoSistema', '_controller' => 'App\\Controller\\SistemaController::nuevoSistema'], null, null, null, false, false, null]],
        '/user/direccionamientoDocumentos' => [[['_route' => 'direccionamientoDocs', '_controller' => 'App\\Controller\\SistemaController::direccionamientoDocumentos'], null, null, null, false, false, null]],
        '/superadmin/usuarios' => [[['_route' => 'usuarios', '_controller' => 'App\\Controller\\UsuariosController::usuarios'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/novedad/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:213)'
                .'|/login/([^/]++)(*:236)'
                .'|/user/(?'
                    .'|email/([^/]++)/([^/]++)(*:276)'
                    .'|direccionamiento/([^/]++)(*:309)'
                .')'
                .'|/admin/(?'
                    .'|modificar(?'
                        .'|Novedad/([^/]++)(*:356)'
                        .'|Sistema/([^/]++)(*:380)'
                    .')'
                    .'|eliminarSistema/([^/]++)(*:413)'
                .')'
                .'|/superadmin/(?'
                    .'|permisos/(?'
                        .'|([^/]++)(*:457)'
                        .'|agregar/([^/]++)/([^/]++)(*:490)'
                        .'|quitar/([^/]++)/([^/]++)(*:522)'
                    .')'
                    .'|cambio(?'
                        .'|Admin/([^/]++)(*:554)'
                        .'|User/([^/]++)(*:575)'
                        .'|SuperAdmin/([^/]++)(*:602)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        213 => [[['_route' => 'crearNovedad', '_controller' => 'App\\Controller\\FuncionesController::crearNovedad'], ['fecha', 'numero', 'titulo', 'email'], null, null, false, true, null]],
        236 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\GoogleController::loginApp'], ['emailEncriptado'], null, null, false, true, null]],
        276 => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], ['motivo', 'mensaje'], null, null, false, true, null]],
        309 => [[['_route' => 'direccionamiento', '_controller' => 'App\\Controller\\SistemaController::direccionamiento'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'modificarNovedad', '_controller' => 'App\\Controller\\NovedadesController::modificarNovedad'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'modificarSistema', '_controller' => 'App\\Controller\\SistemaController::modificarSistema'], ['id'], null, null, true, true, null]],
        413 => [[['_route' => 'eliminarSistema', '_controller' => 'App\\Controller\\SistemaController::quitarCompra'], ['id'], null, null, true, true, null]],
        457 => [[['_route' => 'verPermisos', '_controller' => 'App\\Controller\\PermisosController::permisos'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'agregarPermiso', '_controller' => 'App\\Controller\\PermisosController::agregarPermiso'], ['idSistema', 'idUsuario'], null, null, false, true, null]],
        522 => [[['_route' => 'quitarPermiso', '_controller' => 'App\\Controller\\PermisosController::quitarPermiso'], ['idSistema', 'idUsuario'], null, null, false, true, null]],
        554 => [[['_route' => 'cambioAdmin', '_controller' => 'App\\Controller\\UsuariosController::cambioAdmin'], ['id'], null, null, false, true, null]],
        575 => [[['_route' => 'cambioUser', '_controller' => 'App\\Controller\\UsuariosController::cambioUser'], ['id'], null, null, false, true, null]],
        602 => [
            [['_route' => 'cambioSuperAdmin', '_controller' => 'App\\Controller\\UsuariosController::cambioSuperAdmin'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
