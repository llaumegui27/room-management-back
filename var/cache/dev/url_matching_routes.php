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
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/reservations' => [[['_route' => 'reservations', '_controller' => 'App\\Controller\\ReservationController::reservations'], null, null, null, false, false, null]],
        '/add-reservation' => [[['_route' => 'add-reservation', '_controller' => 'App\\Controller\\ReservationController::addReservation'], null, ['POST' => 0], null, false, false, null]],
        '/rooms' => [[['_route' => 'rooms', '_controller' => 'App\\Controller\\RoomController::rooms'], null, ['GET' => 0], null, false, false, null]],
        '/add-room' => [[['_route' => 'add-room', '_controller' => 'App\\Controller\\RoomController::addRoom'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::users'], null, ['GET' => 0], null, false, false, null]],
        '/add-user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/r(?'
                    .'|eservation/([^/]++)(*:193)'
                    .'|oom/([^/]++)(*:213)'
                .')'
                .'|/delete\\-(?'
                    .'|r(?'
                        .'|eservation/([^/]++)(*:257)'
                        .'|oom/([^/]++)(*:277)'
                    .')'
                    .'|user/([^/]++)(*:299)'
                .')'
                .'|/u(?'
                    .'|pdate\\-(?'
                        .'|r(?'
                            .'|eservation/([^/]++)(*:346)'
                            .'|oom/([^/]++)(*:366)'
                        .')'
                        .'|user/([^/]++)(*:388)'
                    .')'
                    .'|ser/([^/]++)(?'
                        .'|(*:412)'
                        .'|/reservations(*:433)'
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
        193 => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::reservationById'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'room', '_controller' => 'App\\Controller\\RoomController::roomById'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'delete_reservation', '_controller' => 'App\\Controller\\ReservationController::deleteReservation'], ['id'], ['DELETE' => 0], null, false, true, null]],
        277 => [[['_route' => 'delete_room', '_controller' => 'App\\Controller\\RoomController::deleteRoom'], ['id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['DELETE' => 0], null, false, true, null]],
        346 => [[['_route' => 'update-reservation', '_controller' => 'App\\Controller\\ReservationController::updateReservation'], ['id'], ['PUT' => 0], null, false, true, null]],
        366 => [[['_route' => 'update_room', '_controller' => 'App\\Controller\\RoomController::updateRoom'], ['id'], ['PUT' => 0], null, false, true, null]],
        388 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::updateUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        412 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::userById'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [
            [['_route' => 'user_reservations', '_controller' => 'App\\Controller\\UserController::userReservations'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
