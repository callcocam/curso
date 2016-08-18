<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 17/08/2016
 * Time: 21:45
 */

namespace Base\Form;

use Zend\Form\Element;
use Zend\Form\Form;
use Zend\InputFilter;

class UploadForm extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);
        $this->addElements();
        $this->addInputFilter();
    }

    public function addElements()
    {
        // File Input
        $file = new Element\File('image-file');
        $file->setLabel('Avatar Image Upload');
        $file->setAttribute('id', 'image-file');

        $this->add($file);
    }

    public function addInputFilter()
    {
        $inputFilter = new InputFilter\InputFilter();

        // File Input
        $fileInput = new InputFilter\FileInput('image-file');
        $fileInput->setRequired(true);
        $fileInput->getValidatorChain()
            ->attachByName('filesize',      ['max' => 904800])
            ->attachByName('filemimetype',  ['mimeType' => 'image/png,image/x-png,image/jpeg,image/jpg'])
            ->attachByName('fileimagesize', ['maxWidth' => 5000, 'maxHeight' => 2500]);

        $fileInput->getFilterChain()->attachByName(
            'filerenameupload',
            [
                'target'    => './data/avatar.png',
                'randomize' => true,
            ]
        );
        $inputFilter->add($fileInput);

        $this->setInputFilter($inputFilter);
    }
}