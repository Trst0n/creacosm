<?php

namespace ContainerQUwB4qx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRepondRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\RepondRepository' shared autowired service.
     *
     * @return \App\Repository\RepondRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-exporter/Internal/LazyObjectTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-exporter/LazyGhostTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/LazyServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/RepondRepository.php';

        return $container->privates['App\\Repository\\RepondRepository'] = new \App\Repository\RepondRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
