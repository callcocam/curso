<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 10:21
 */

namespace Base\Form;


use Interop\Container\ContainerInterface;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Filter\ToInt;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;

class AbstractFilter extends InputFilter {
    /**
     * @var ContainerInterface
     */
    private $containerInterface;

    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface = $containerInterface;
    }

    /**
     * @param mixed $id
     */
    public function setId($id=[])
    {
        $this->add(array_replace([
            'name' => 'id',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ],$id));
    }


    /**
     * @param mixed $assetid
     */
    public function setAssetid($assetid=[])
    {
        $this->add(array_replace([
            'name' => 'asset_id',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ],$assetid));
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo=[])
    {
        $this->add(array_replace([
            'name' => 'codigo',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ],$codigo));
    }

    /**
     * @param mixed $empresa
     */
    public function setEmpresa($empresa=[])
    {
        $this->add(array_replace([
            'name' => 'empresa',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ],$empresa));
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title=[])
    {
        $this->add(array_replace([
            'name' => 'title',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 5,
                        'max' => 250,
                        'messages'=>[StringLength::TOO_LONG=>"Texto Muito Longo, Maximo:255",StringLength::TOO_SHORT=>"Texto Muito Curto, Minimo 5"]
                    ],
                ],
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages'=>[NotEmpty::IS_EMPTY=>"Campo Obrigatorio"]
                    ],
                ],
            ],
        ],$title));
    }


    /**
     * @param mixed $description
     */
    public function setDescription($description=[])
    {
        $this->add(array_replace([
            'name' => 'dercription',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]            ,
            'validators' => [
               [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages'=>[NotEmpty::IS_EMPTY=>"Campo Obrigatorio"]
                    ],
                ],
            ]

        ],$description));
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created=[])
    {
        $this->add(array_replace([
            'name' => 'created',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ],$created));
    }

    /**
     * @param mixed $modified
     */
    public function setModified($modified=[])
    {
        $this->add(array_replace([
            'name' => 'modified',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]
        ],$modified));
    }

    /**
     * @param mixed $access
     */
    public function setAccess($access=[])
    {
        $this->add(array_replace([
            'name' => 'access',
            'required' => true,
            'filters' => [
                ['name' => ToInt::class],
            ],
        ],$access));
    }


    /**
     * @param mixed $state
     */
    public function setState($state=[])
    {
        $this->add(array_replace([
            'name' => 'state',
            'required' => true,
            'filters' => [
                ['name' => ToInt::class],
            ],
        ],$state));
    }

    /**
     * @param mixed $csrf
     */
    public function setCsrf($csrf=[])
    {
        $this->add(array_replace("",$csrf));
    }



    /**
     * @param mixed $captcha
     */
    public function setCaptcha($captcha=[])
    {
        $this->add(array_replace("",$captcha));
    }


}