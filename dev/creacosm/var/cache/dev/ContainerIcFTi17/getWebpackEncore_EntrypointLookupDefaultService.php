<?php

namespace ContainerIcFTi17;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_EntrypointLookupDefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'webpack_encore.entrypoint_lookup[_default]' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/IntegrityDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookup.php';

        return $container->privates['webpack_encore.entrypoint_lookup[_default]'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup((\dirname(__DIR__, 4).'/public/build/entrypoints.json'), NULL, '_default', true);
    }
}
