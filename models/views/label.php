<?php

/**
 * @var \models\Label $this
 */

$background = $this->getBackground();
$width = $this->getWidth();
$height = $this->getHeight();
$parentname = $this->getParentName();

?>

<label for="" style="background-color: <?= $background ?>; width: <?= $width?>px; height: <?= $height?>px;" name="<?= $parentname?>"><?= $parentname?></label>