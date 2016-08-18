<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 19:03
 */

namespace Admin\Model\Factory;


use Admin\Model\Configuracao;
use Admin\Model\ConfiguracaoRepository;
use Base\Model\AbstractFactory;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class ConfiguracaoRepositoryFactory extends AbstractFactory implements FactoryInterface{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
       $this->model=Configuracao::class;
        $this->table="bs_configuracao";
        return new ConfiguracaoRepository($this->getTablegateway($container));

    }
}