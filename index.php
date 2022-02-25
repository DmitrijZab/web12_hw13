<?php

spl_autoload_register(function ($className){
    $file = "$className.php";
//    if(file_exists($file)) {
        include_once "$className.php";
//    }
});

$classButton = new \models\Button("lightblue", 200, 60, "btn-name", "Send",  true, "");
$classText = new \models\Text("lightyellow", 200, 100, "btn-text", "", "Comment1");
$classInput = new \models\Input("Input", "", 300, 50, "lightyellow", "Input");
$classInput1 = new \models\Input("Input", "", 300, 50, "lightyellow", "Input");
$classInput2 = new \models\Input("Input", "", 300, 50, "lightyellow", "Input");
$classInput3 = new \models\Input("Input", "", 300, 50, "lightyellow", "Input");
$classLabel = new \models\Label("orange", 200, 50, $classInput);
$classSelect= new \models\Select("lightyellow", 300, 50, "", "Select", "Select");

$classRadio1 = new \models\Radio("lightyellow", 20, 20, "Radio", "Radio", "checked", "");
$classRadio2 = new \models\Radio("lightyellow", 20, 20, "Radio", "Radio", "", "");
$classCheckbox = new \models\Checkbox( "lightyellow", 20, 20, "", "", "", "");
$classButton2 = new \models\Button("lightgreen", 300, 50, "btn-name", "Send",  true, "");

function convertToHTML(\models\Control  $control){
    return $control->toHTML();
}

?>
<div>
    <?= convertToHTML($classButton); ?>
</div>
</br>
<div>
    <?= convertToHTML($classText); ?>
</div>
</br>
<div>
    <?= convertToHTML($classLabel); ?>
</div>
</br>
<div>
   First Name <?= convertToHTML($classInput); ?>
</div>
</br>
<div>
    Last Name <?= convertToHTML($classInput1); ?>
</div>
</br>
<div>
   Email <?= convertToHTML($classInput2); ?>
</div>
</br>
<div>
   Phone <?= convertToHTML($classInput3); ?>
</div>
</br>
<div>
    <?= convertToHTML($classSelect); ?>
</div>
</br>
<div class="row d-flex">
    <span >
        <?= convertToHTML($classRadio1); ?> Male
    </span>
    <span >
        <?= convertToHTML($classRadio2); ?> Female
    </div>
</div>
</br>
<div>
    <?= convertToHTML($classCheckbox); ?> Subscribe
</div>
</br>
<div>
    <?= convertToHTML($classButton2); ?>
</div>