<?php

namespace ContainerD37ogqT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimelineControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TimelineController' shared autowired service.
     *
     * @return \App\Controller\TimelineController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TimelineController.php';

        $container->services['App\\Controller\\TimelineController'] = $instance = new \App\Controller\TimelineController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\TimelineController', $container));

        return $instance;
    }
}
