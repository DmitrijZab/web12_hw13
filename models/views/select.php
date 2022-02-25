<?php

/**
 * @var \models\Select $this
 */

$background = $this->getBackground();
$width = $this->getWidth();
$height = $this->getHeight();
$name = $this->getName();
$value = $this->getValue();
$items = $this->getItems();
?>



<select name="<?= $name?>" style="background-color: <?= $background ?>; width: <?= $width?>px; height: <?= $height?>px;" >
    <option value="<?= $value ?>" selected> <?= $value ?></option>
    <option value="<?= $value ?>"><?= $value ?></option>
</select>