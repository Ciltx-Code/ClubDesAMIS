<?php

namespace ContainerVPFoY7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O1XGkAGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O1XGkAG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O1XGkAG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['privates', '.errored..service_locator.O1XGkAG.Doctrine\\ORM\\EntityManager', NULL, 'Cannot autowire service ".service_locator.O1XGkAG": it references class "Doctrine\\ORM\\EntityManager" but no such service exists. Try changing the type-hint to "Doctrine\\ORM\\EntityManagerInterface" instead.'],
        ], [
            'entityManager' => 'Doctrine\\ORM\\EntityManager',
        ]);
    }
}
