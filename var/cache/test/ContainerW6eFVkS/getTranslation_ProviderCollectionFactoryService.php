<?php

namespace ContainerW6eFVkS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderCollectionFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.provider_collection_factory' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\TranslationProviderCollectionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TranslationProviderCollectionFactory.php';

        return $container->privates['translation.provider_collection_factory'] = new \Symfony\Component\Translation\Provider\TranslationProviderCollectionFactory(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['translation.provider_factory.null'] ??= new \Symfony\Component\Translation\Provider\NullProviderFactory());
        }, 1), []);
    }
}
