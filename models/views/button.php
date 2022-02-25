
<?php

/**
 * @var \models\Button $this
*/

$background = $this->getBackground();
$width = $this->getWidth();
$height = $this->getHeight();
$name = $this->getName();
$value = $this->getValue();
$isSubmit = $this->getSubmitState();

$type = $isSubmit ? "submit" : "button";

?>

<button type="<?= $type?>" style="background-color: <?= $background ?>; width: <?= $width?>px; height: <?= $height?>px;" name="<?= $name?>" value="<?= $value ?>"><?= $value ?></button>