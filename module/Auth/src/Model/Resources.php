<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 19:34
 */

namespace Auth\Model;


use Base\Model\AbstractModel;

class Resources extends AbstractModel{

    protected $title;
    protected $alias;

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


} 