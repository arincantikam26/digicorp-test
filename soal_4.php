<?php 
$arrValue = array();

function getSecondMaxValue($value){
    rsort($value);

    $getValue = $value[1];
    
    return $getValue;

}


for($i=0; $i<5; $i++){
    $arrValue[] = rand(1,100);
}

$test1 = getSecondMaxValue($arrValue);
print_r($arrValue);

echo "<br>" . $test1;



?>