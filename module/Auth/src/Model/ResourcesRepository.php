<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 19:35
 */

namespace Auth\Model;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class ResourcesRepository extends AbstractRepository{

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}