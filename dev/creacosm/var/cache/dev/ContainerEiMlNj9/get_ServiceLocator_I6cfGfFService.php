<?php

namespace ContainerEiMlNj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I6cfGfFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i6cfGfF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i6cfGfF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
            'sondageRepository' => ['privates', 'App\\Repository\\SondageRepository', 'getSondageRepositoryService', true],
            'themeRepository' => ['privates', 'App\\Repository\\ThemeRepository', 'getThemeRepositoryService', true],
            'typeRepository' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService', true],
        ], [
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
            'sondageRepository' => 'App\\Repository\\SondageRepository',
            'themeRepository' => 'App\\Repository\\ThemeRepository',
            'typeRepository' => 'App\\Repository\\TypeRepository',
        ]);
    }
}