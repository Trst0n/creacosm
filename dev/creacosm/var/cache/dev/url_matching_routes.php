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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/racine' => [[['_route' => 'app_racine', '_controller' => 'App\\Controller\\RacineController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\RacineController::accueil'], null, null, null, false, false, null]],
        '/moncompte' => [[['_route' => 'app_moncompte', '_controller' => 'App\\Controller\\RacineController::account'], null, null, null, false, false, null]],
        '/setmoncompte' => [[['_route' => 'app_set_moncompte', '_controller' => 'App\\Controller\\RacineController::modifierInformation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error403' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\RacineController::error403'], null, ['GET' => 0], null, false, false, null]],
        '/error404' => [[['_route' => 'app_error404', '_controller' => 'App\\Controller\\RacineController::show404'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sondage/themedefine' => [[['_route' => 'app_sondage_theme_define', '_controller' => 'App\\Controller\\SondageController::themedefine'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sondage' => [[['_route' => 'app_sondage_index', '_controller' => 'App\\Controller\\SondageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sondage/createTheme' => [[['_route' => 'app_theme', '_controller' => 'App\\Controller\\SondageController::createTheme'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sondage/creationTheme' => [[['_route' => 'app_theme_creation', '_controller' => 'App\\Controller\\SondageController::creationTheme'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sondage/reponsesondage' => [[['_route' => 'app_repondre_sondage', '_controller' => 'App\\Controller\\SondageController::repondresondage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sondage/new' => [[['_route' => 'app_sondage_new', '_controller' => 'App\\Controller\\SondageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sondage/create' => [[['_route' => 'app_sondage_create', '_controller' => 'App\\Controller\\SondageController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/sondage/([^/]++)(?'
                    .'|/(?'
                        .'|deleteTheme(*:204)'
                        .'|repondre(*:220)'
                        .'|edit(?'
                            .'|(*:235)'
                            .'|ed(*:245)'
                        .')'
                    .')'
                    .'|(*:255)'
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
        204 => [[['_route' => 'app_theme_delete', '_controller' => 'App\\Controller\\SondageController::deleteTheme'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        220 => [[['_route' => 'app_repondre', '_controller' => 'App\\Controller\\SondageController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        235 => [[['_route' => 'app_sondage_edit', '_controller' => 'App\\Controller\\SondageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [[['_route' => 'app_sondage_edited', '_controller' => 'App\\Controller\\SondageController::editted'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [
            [['_route' => 'app_sondage_show', '_controller' => 'App\\Controller\\SondageController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_sondage_delete', '_controller' => 'App\\Controller\\SondageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
