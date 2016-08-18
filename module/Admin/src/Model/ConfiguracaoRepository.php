<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 19:01
 */

namespace Admin\Model;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class ConfiguracaoRepository extends AbstractRepository{

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}