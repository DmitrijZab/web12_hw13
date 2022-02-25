<?php

/**
 * @var \models\Input $this
 */

$background = $this->getBackground();
$width = $this->getWidth();
$height = $this->getHeight();
$name = $this->getName();
$value = $this->getValue();
$placeholder = $this->getPlaceholder();

?>

<input type="text" style="background-color: <?= $background ?>; width: <?= $width?>px; height: <?= $height?>px;" name="<?= $name?>" value="<?= $value ?>" placeholder="<?= $placeholder ?>">