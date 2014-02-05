<?php

namespace Ck\Evt\SharedBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Default controller
 * Generated on Feb 5, 2014 3:07:01 AM
 *
 * @author Alexandre ANDRÉ <alexandre@creakiwi.com>
 */
class Controller implements ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

/*
 * TO IMPLEMENT
    public function __get($service)
    {
        $service = strtolower($service);
        
        if (!$this->container->has($service))
            throw new \InvalidArgumentException(sprintf('There is no service named "%s"', $service));
        
        return $this->get($service);
    }
    
    public function __call($name, $arguments)
    {
    }
*/
    public function get($service)
    {
        return $this->container->get($service);
    }
}
