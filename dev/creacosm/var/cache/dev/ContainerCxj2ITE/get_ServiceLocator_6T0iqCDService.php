<?php

namespace ContainerCxj2ITE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6T0iqCDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6T0iqCD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6T0iqCD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
            'sondageRepository' => ['privates', 'App\\Repository\\SondageRepository', 'getSondageRepositoryService', true],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
            'sondageRepository' => 'App\\Repository\\SondageRepository',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
