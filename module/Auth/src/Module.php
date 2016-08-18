<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 00:56
 */

namespace Auth;


use Auth\Model\Factory\ResourcesFactory;
use Auth\Model\Factory\ResourcesRepositoryFactory;
use Auth\Model\Resources;
use Auth\Model\ResourcesRepository;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface {

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories'=>[
                ResourcesRepository::class=>ResourcesRepositoryFactory::class,
                Resources::class=>ResourcesFactory::class,
            ]
        ];
    }
}