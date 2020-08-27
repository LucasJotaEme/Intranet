<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'crearNovedad' => [['fecha', 'numero', 'titulo', 'email'], ['_controller' => 'App\\Controller\\FuncionesController::crearNovedad'], [], [['variable', '/', '[^/]++', 'email', true], ['variable', '/', '[^/]++', 'titulo', true], ['variable', '/', '[^/]++', 'numero', true], ['variable', '/', '[^/]++', 'fecha', true], ['text', '/novedad']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\GoogleController::login'], [], [['text', '/login']], [], []],
    'app_login' => [['emailEncriptado'], ['_controller' => 'App\\Controller\\GoogleController::loginApp'], [], [['variable', '/', '[^/]++', 'emailEncriptado', true], ['text', '/login']], [], []],
    'connect_google' => [[], ['_controller' => 'App\\Controller\\GoogleController::connectAction'], [], [['text', '/connect/google']], [], []],
    'connect_google_check' => [[], ['_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], [], [['text', '/connect/google/check']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\GoogleController::logout'], [], [['text', '/logout']], [], []],
    'app_mailer_sendemail' => [['motivo', 'mensaje'], ['_controller' => 'App\\Controller\\MailerController::sendEmail'], [], [['variable', '/', '[^/]++', 'mensaje', true], ['variable', '/', '[^/]++', 'motivo', true], ['text', '/user/email']], [], []],
    'verPermisos' => [['id'], ['_controller' => 'App\\Controller\\PermisosController::permisos'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/superadmin/permisos']], [], []],
    'agregarPermiso' => [['idSistema', 'idUsuario'], ['_controller' => 'App\\Controller\\PermisosController::agregarPermiso'], [], [['variable', '/', '[^/]++', 'idUsuario', true], ['variable', '/', '[^/]++', 'idSistema', true], ['text', '/superadmin/permisos/agregar']], [], []],
    'quitarPermiso' => [['idSistema', 'idUsuario'], ['_controller' => 'App\\Controller\\PermisosController::quitarPermiso'], [], [['variable', '/', '[^/]++', 'idUsuario', true], ['variable', '/', '[^/]++', 'idSistema', true], ['text', '/superadmin/permisos/quitar']], [], []],
    'sistemas' => [[], ['_controller' => 'App\\Controller\\SistemaController::sistemas'], [], [['text', '/user/sistemas']], [], []],
    'nuevoSistema' => [[], ['_controller' => 'App\\Controller\\SistemaController::nuevoSistema'], [], [['text', '/admin/nuevoSistema']], [], []],
    'modificarSistema' => [['id'], ['_controller' => 'App\\Controller\\SistemaController::modificarSistema'], [], [['text', '/'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/modificarSistema']], [], []],
    'eliminarSistema' => [['id'], ['_controller' => 'App\\Controller\\SistemaController::quitarCompra'], [], [['text', '/'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/eliminarSistema']], [], []],
    'direccionamiento' => [['id'], ['_controller' => 'App\\Controller\\SistemaController::direccionamiento'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/direccionamiento']], [], []],
    'direccionamientoDocs' => [[], ['_controller' => 'App\\Controller\\SistemaController::direccionamientoDocumentos'], [], [['text', '/user/direccionamientoDocumentos']], [], []],
    'usuarios' => [[], ['_controller' => 'App\\Controller\\UsuariosController::usuarios'], [], [['text', '/superadmin/usuarios']], [], []],
    'cambioAdmin' => [['id'], ['_controller' => 'App\\Controller\\UsuariosController::cambioAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/superadmin/cambioAdmin']], [], []],
    'cambioUser' => [['id'], ['_controller' => 'App\\Controller\\UsuariosController::cambioUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/superadmin/cambioUser']], [], []],
    'cambioSuperAdmin' => [['id'], ['_controller' => 'App\\Controller\\UsuariosController::cambioSuperAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/superadmin/cambioSuperAdmin']], [], []],
];
