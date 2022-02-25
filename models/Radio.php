<?php

namespace models;

class Radio extends Input
{
    private $isChecked;

    /**
     * @param $isChecked
     */
    public function __construct($_background, $_width, $_height, $_name, $_value, $isChecked, $_placeholder)
    {
        parent::__construct($_name, $_value, $_width, $_height, $_background, $_placeholder);
        $this->isChecked = $isChecked;
    }


    /**
     * @return mixed
     */
    public function getCheckedState()
    {
        return $this->isChecked;
    }

    /**
     * @param mixed $isChecked
     */
    public function setCheckedState($isChecked)
    {
        $this->isChecked = $isChecked;
    }

    public function toHTML()
    {
        ob_start();
        include "views\\radio.php";

        return ob_get_clean();

    }

}