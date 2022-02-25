
<?php

/**
 * @var \models\Radio $this
 */

$background = $this->getBackground();
$width = $this->getWidth();
$height = $this->getHeight();
$name = $this->getName();
$value = $this->getValue();
$placeholder = $this->getPlaceholder();
$isChecked = $this->getCheckedState();

$type = $isChecked ? "checked" : "";
?>

<input type="radio" style="background-color: <?= $background ?>; width: <?= $width?>px; height: <?= $height?>px;" name="<?= $name?>" value="<?= $value ?>" placeholder="<?= $placeholder ?>" <?=$type ?>>
