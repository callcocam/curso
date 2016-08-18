<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 18/08/2016
 * Time: 10:38
 */

namespace Admin\Form\Factory;


use Admin\Form\ConfiguracaoForm;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ConfiguracaoFormFactory implements FactoryInterface {

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
       return new ConfiguracaoForm($container);
    }
}