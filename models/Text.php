<?php


namespace models;


/**
 * @property string $placeholder
*/
class Text extends Input
{
    private $placeholder;

    public function __construct($_background, $_width, $_height, $_name, $_value, $_placeholder){
        $this->setBackground($_background);
        $this->setWidth($_width);
        $this->setHeight($_height);
        $this->setName($_name);
        $this->setValue($_value);
        $this->setPlaceholder($_placeholder);
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function toHTML()
    {
        ob_start();
        include "views\\text.php";

        return ob_get_clean();

    }


}