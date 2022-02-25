<?php


namespace models;

/**
 * @property boolean $isSubmit
*/
class Button extends Input
{
    private $isSubmit;

    public function __construct($_background, $_width, $_height, $_name, $_value, $_isSubmit, $_placeholder){
        parent::__construct($_name, $_value, $_width, $_height, $_background,$_placeholder);
        $this->setSubmitState($_isSubmit);
    }

    /**
     * @return mixed
     */
    public function getSubmitState()
    {
        return $this->isSubmit;
    }

    /**
     * @param mixed $isSubmit
     */
    public function setSubmitState($isSubmit)
    {
        $this->isSubmit = $isSubmit;
    }

    public function toHTML()
    {

        // открывает буферизацию
        ob_start();
            include "views\\button.php";
        $content = ob_get_clean();
        return $content;
    }

}