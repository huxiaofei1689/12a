<?php

$array = [2,4,3,6,3,2,5,5];
$arr = number($array);
var_dump($arr);
function number($array){
    $array = number($array);
    array_count_values($array);
    asort(array_keys($array));
}
array_keys([0],$array_keys[1]);
