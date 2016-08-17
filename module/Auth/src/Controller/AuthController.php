<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 00:57
 */

namespace Auth\Controller;


use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

class AuthController extends AbstractController {

    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface=$containerInterface;
    }
}