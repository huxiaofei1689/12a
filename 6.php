<?php

num(100,1300);
function num($n,$m){
    $arr = range($n,$m);
    echo substr_count(join($arr),'1')-1;
}