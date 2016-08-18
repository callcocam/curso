<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin;


use Admin\Form\ConfiguracaoFilter;
use Admin\Form\ConfiguracaoForm;
use Admin\Form\Factory\ConfiguracaoFilterFactory;
use Admin\Form\Factory\ConfiguracaoFormFactory;
use Admin\Model\Configuracao;
use Admin\Model\ConfiguracaoRepository;
use Admin\Model\Factory\ConfiguracaoFactory;
use Admin\Model\Factory\ConfiguracaoRepositoryFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface
{

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
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
               ConfiguracaoRepository::class=>ConfiguracaoRepositoryFactory::class,
                Configuracao::class=>ConfiguracaoFactory::class,
                ConfiguracaoForm::class=>ConfiguracaoFormFactory::class,
                ConfiguracaoFilter::class=>ConfiguracaoFilterFactory::class,
            ]
        ];
    }
}
