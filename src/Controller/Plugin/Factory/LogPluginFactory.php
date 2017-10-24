<?php

namespace MassimoFilippi\LogModule\Controller\Plugin\Factory;

use Interop\Container\ContainerInterface;
use MassimoFilippi\LogModuleController\Plugin\LogPlugin;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class LogPluginFactory
 * @package MassimoFilippi\LogModule\Controller\Plugin\Factory
 */
class LogPluginFactory implements FactoryInterface
{

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return LogPlugin
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LogPlugin();
    }
}
