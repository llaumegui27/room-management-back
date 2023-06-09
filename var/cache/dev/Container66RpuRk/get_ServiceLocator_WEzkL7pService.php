<?php

namespace Container66RpuRk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WEzkL7pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wEzkL7p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wEzkL7p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'roomRepository' => ['privates', 'App\\Repository\\RoomRepository', 'getRoomRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'roomRepository' => 'App\\Repository\\RoomRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
