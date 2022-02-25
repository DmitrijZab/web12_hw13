<?php

/**
 * @var \models\Text $this
 */

$background = $this->getBackground();
$width = $this->getWidth();
$height = $this->getHeight();
$name = $this->getName();
$value = $this->getValue();
$placeholder = $this->getPlaceholder();

?>


<textarea style="background-color: <?= $background ?>; width: <?= $width?>px; height: <?= $height?>px;" name="<?= $name?>" placeholder="<?= $placeholder ?>"><?= $value ?></textarea>