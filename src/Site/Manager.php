<?php
namespace Ecompassaro\Site\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Ecompassaro\Site\Manager as SiteManager;

class Manager implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new SiteManager($container->get('SiteRepository'));
    }
}
