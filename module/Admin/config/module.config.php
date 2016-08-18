<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin;

use Admin\Controller\ConfiguracaoController;
use Admin\Controller\Factory\AdminControllerFactory;
use Admin\Controller\Factory\ConfiguracaoControllerFactory;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'admin' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/admin',
                    'defaults' => [
                        'controller' => Controller\AdminController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\AdminController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'configuracao' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/configuracao[/:action]',
                    'defaults' => [
                        'controller' => Controller\ConfiguracaoController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AdminController::class => AdminControllerFactory::class,
            Controller\ConfiguracaoController::class => ConfiguracaoControllerFactory::class,
        ],
    ],
    'view_manager' => [
         'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
