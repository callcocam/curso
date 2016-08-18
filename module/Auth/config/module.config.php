<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Auth;

use Auth\Controller\Factory\AuthControllerFactory;
use Auth\Controller\Factory\ResourcesControllerFactory;
use Auth\Controller\ResourcesController;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'auth' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/auth',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'resources' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/resources[/:action]',
                    'defaults' => [
                        'controller' => Controller\ResourcesController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AuthController::class => AuthControllerFactory::class,
            Controller\ResourcesController::class => ResourcesControllerFactory::class,
        ],
    ],
    'view_manager' => [
       'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
