<?php

namespace models;

/**
 * @property integer $width
 * @property integer $height
 * @property string $background
*/
abstract class Control
{
    private $width;
    private $height;
    private $background;

    public function __construct($width, $height, $background){
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setBackground($background);
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param integer $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param string $background
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }

    public function toHTML(){
        return "";
    }



}