<?php

namespace models;

class Select extends Control
{
private $items;
private $name;
private $value;
    /**
     * @param $items
     */
    public function __construct($_background, $_width, $_height, $_items, $_name, $_value)
    {
        parent::__construct( $_width, $_height, $_background);
        $this->setItems($_items);
        $this->setName($_name);
        $this->setValue($_value);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function toHTML()
    {
        ob_start();
        include "views\\select.php";

        return ob_get_clean();

    }


}