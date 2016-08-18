<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 19:38
 */

namespace Auth\Controller;


use Auth\Model\Resources;
use Auth\Model\ResourcesRepository;
use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

class ResourcesController extends AbstractController{

    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface=$containerInterface;
        $this->table=ResourcesRepository::class;
        $this->model=Resources::class;
        $this->route="resources";
        $this->controller="resources";
    }
}