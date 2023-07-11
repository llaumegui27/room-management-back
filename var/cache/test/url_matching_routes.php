<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/r(?'
                    .'|eservation/([^/]++)(*:31)'
                    .'|oom/([^/]++)(*:50)'
                .')'
                .'|/delete\\-(?'
                    .'|r(?'
                        .'|eservation/([^/]++)(*:93)'
                        .'|oom/([^/]++)(*:112)'
                    .')'
                    .'|user/([^/]++)(*:134)'
                .')'
                .'|/u(?'
                    .'|pdate\\-(?'
                        .'|r(?'
                            .'|eservation/([^/]++)(*:181)'
                            .'|oom/([^/]++)(*:201)'
                        .')'
                        .'|user/([^/]++)(*:223)'
                    .')'
                    .'|ser/([^/]++)(?'
                        .'|(*:247)'
                        .'|/reservations(*:268)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::reservationById'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'room', '_controller' => 'App\\Controller\\RoomController::roomById'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'delete_reservation', '_controller' => 'App\\Controller\\ReservationController::deleteReservation'], ['id'], ['DELETE' => 0], null, false, true, null]],
        112 => [[['_route' => 'delete_room', '_controller' => 'App\\Controller\\RoomController::deleteRoom'], ['id'], ['DELETE' => 0], null, false, true, null]],
        134 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['DELETE' => 0], null, false, true, null]],
        181 => [[['_route' => 'update-reservation', '_controller' => 'App\\Controller\\ReservationController::updateReservation'], ['id'], ['PUT' => 0], null, false, true, null]],
        201 => [[['_route' => 'update_room', '_controller' => 'App\\Controller\\RoomController::updateRoom'], ['id'], ['PUT' => 0], null, false, true, null]],
        223 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::updateUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        247 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::userById'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [
            [['_route' => 'user_reservations', '_controller' => 'App\\Controller\\UserController::userReservations'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
