<?php

namespace ContainerBQ9sjHC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gliqgh1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gliqgh1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gliqgh1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.vzUXUAi', 'get_ServiceLocator_VzUXUAiService', true],
            'App\\Controller\\ReservationController::addReservation' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\ReservationController::deleteReservation' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\ReservationController::reservationById' => ['privates', '.service_locator.caJHb8S', 'get_ServiceLocator_CaJHb8SService', true],
            'App\\Controller\\ReservationController::reservations' => ['privates', '.service_locator.CyXZYz.', 'get_ServiceLocator_CyXZYz_Service', true],
            'App\\Controller\\ReservationController::updateReservation' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RoomController::addRoom' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RoomController::deleteRoom' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RoomController::roomById' => ['privates', '.service_locator.0.E_r2b', 'get_ServiceLocator_0_ER2bService', true],
            'App\\Controller\\RoomController::rooms' => ['privates', '.service_locator.0.E_r2b', 'get_ServiceLocator_0_ER2bService', true],
            'App\\Controller\\RoomController::updateRoom' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController::addUser' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController::deleteUser' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController::updateUser' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController::userById' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::userReservations' => ['privates', '.service_locator.wEzkL7p', 'get_ServiceLocator_WEzkL7pService', true],
            'App\\Controller\\UserController::users' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.vzUXUAi', 'get_ServiceLocator_VzUXUAiService', true],
            'App\\Controller\\ReservationController:addReservation' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\ReservationController:deleteReservation' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\ReservationController:reservationById' => ['privates', '.service_locator.caJHb8S', 'get_ServiceLocator_CaJHb8SService', true],
            'App\\Controller\\ReservationController:reservations' => ['privates', '.service_locator.CyXZYz.', 'get_ServiceLocator_CyXZYz_Service', true],
            'App\\Controller\\ReservationController:updateReservation' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RoomController:addRoom' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RoomController:deleteRoom' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RoomController:roomById' => ['privates', '.service_locator.0.E_r2b', 'get_ServiceLocator_0_ER2bService', true],
            'App\\Controller\\RoomController:rooms' => ['privates', '.service_locator.0.E_r2b', 'get_ServiceLocator_0_ER2bService', true],
            'App\\Controller\\RoomController:updateRoom' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController:addUser' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController:deleteUser' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController:updateUser' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\UserController:userById' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:userReservations' => ['privates', '.service_locator.wEzkL7p', 'get_ServiceLocator_WEzkL7pService', true],
            'App\\Controller\\UserController:users' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\ReservationController::addReservation' => '?',
            'App\\Controller\\ReservationController::deleteReservation' => '?',
            'App\\Controller\\ReservationController::reservationById' => '?',
            'App\\Controller\\ReservationController::reservations' => '?',
            'App\\Controller\\ReservationController::updateReservation' => '?',
            'App\\Controller\\RoomController::addRoom' => '?',
            'App\\Controller\\RoomController::deleteRoom' => '?',
            'App\\Controller\\RoomController::roomById' => '?',
            'App\\Controller\\RoomController::rooms' => '?',
            'App\\Controller\\RoomController::updateRoom' => '?',
            'App\\Controller\\UserController::addUser' => '?',
            'App\\Controller\\UserController::deleteUser' => '?',
            'App\\Controller\\UserController::updateUser' => '?',
            'App\\Controller\\UserController::userById' => '?',
            'App\\Controller\\UserController::userReservations' => '?',
            'App\\Controller\\UserController::users' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\ReservationController:addReservation' => '?',
            'App\\Controller\\ReservationController:deleteReservation' => '?',
            'App\\Controller\\ReservationController:reservationById' => '?',
            'App\\Controller\\ReservationController:reservations' => '?',
            'App\\Controller\\ReservationController:updateReservation' => '?',
            'App\\Controller\\RoomController:addRoom' => '?',
            'App\\Controller\\RoomController:deleteRoom' => '?',
            'App\\Controller\\RoomController:roomById' => '?',
            'App\\Controller\\RoomController:rooms' => '?',
            'App\\Controller\\RoomController:updateRoom' => '?',
            'App\\Controller\\UserController:addUser' => '?',
            'App\\Controller\\UserController:deleteUser' => '?',
            'App\\Controller\\UserController:updateUser' => '?',
            'App\\Controller\\UserController:userById' => '?',
            'App\\Controller\\UserController:userReservations' => '?',
            'App\\Controller\\UserController:users' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
