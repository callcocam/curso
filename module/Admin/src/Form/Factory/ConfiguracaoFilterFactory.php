<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 18/08/2016
 * Time: 10:39
 */

namespace Admin\Form\Factory;


use Admin\Form\ConfiguracaoFilter;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ConfiguracaoFilterFactory implements FactoryInterface{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ConfiguracaoFilter($container);
    }
}