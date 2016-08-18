<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 19:06
 */

namespace Admin\Controller;


use Admin\Form\ConfiguracaoFilter;
use Admin\Form\ConfiguracaoForm;
use Admin\Model\Configuracao;
use Admin\Model\ConfiguracaoRepository;
use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

class ConfiguracaoController extends AbstractController{

    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface=$containerInterface;
        $this->table=ConfiguracaoRepository::class;
        $this->model=Configuracao::class;
        $this->form=ConfiguracaoForm::class;
        $this->filter=ConfiguracaoFilter::class;
        $this->controller="configuracao";
        $this->route="configuracao";
    }
}