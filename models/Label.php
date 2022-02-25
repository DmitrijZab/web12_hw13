<?php


namespace models;


/**
 * @property string $for
*/
class Label extends Control
{
    private $for;

    public function __construct($_background, $_width, $_height, Input $input){
        $this->setBackground($_background);
        $this->setWidth($_width);
        $this->setHeight($_height);
        $this->setParentName($input);
    }

    /**
     * @return mixed
     */
    public function getParentName()
    {
        return $this->for;
    }

    public function setParentName(Input $input){

        $this->for = $input->getName();
    }
    public function toHTML()
    {
        ob_start();
        include "views\\label.php";

        return ob_get_clean();

    }

}