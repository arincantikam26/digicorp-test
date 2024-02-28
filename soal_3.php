<?php 

$i = 0;

function getColorLight(){
    global $i;
    $arrColor = ['merah', 'kuning', 'hijau'];

    $checkColor = $arrColor[$i % count($arrColor)];
    $i++;
    return $checkColor;

}

for($j = 0; $j<4; $j++) {
    $getColorLight = getColorLight();
    echo $getColorLight . "<br>";
}


?>