<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 18/08/2016
 * Time: 10:34
 */

namespace Admin\Form;


use Base\Form\AbstractFilter;
use Interop\Container\ContainerInterface;

class ConfiguracaoFilter extends AbstractFilter {
    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        parent::__construct($containerInterface);
        $this->setId();
        $this->setCodigo();
        $this->setEmpresa();
        $this->setAssetid();
        $this->setDescription();
        $this->setAccess();
        $this->setState();
        $this->setCreated();
        $this->setModified();
    }




} 