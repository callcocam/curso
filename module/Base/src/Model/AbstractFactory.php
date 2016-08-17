<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 10:20
 */

namespace Base\Model;


use Zend\Db\TableGateway\TableGateway;

class AbstractFactory {

    protected $table;
    protected $model;
    protected $adapter;

    public function getTablegateway()
    {
        return new TableGateway($this->table,$this->adapter,null,$this->model);
    }
} 