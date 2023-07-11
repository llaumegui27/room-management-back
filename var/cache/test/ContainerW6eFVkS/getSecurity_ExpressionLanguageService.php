<?php

namespace ContainerW6eFVkS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ExpressionLanguageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.expression_language' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\ExpressionLanguage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';

        return $container->privates['security.expression_language'] = new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($container->privates['cache.security_expression_language'] ?? self::getCache_SecurityExpressionLanguageService($container)));
    }
}
