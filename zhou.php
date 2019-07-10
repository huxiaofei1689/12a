<?php

//function calsteps($n){
// if($n==1) return 1;
// if($n==2) return 2;
//
// return calsteps( $n-1)+calsteps($n-2);
//}
//echo calsteps(10);

function calsteps($n){

 if($n==1) return 1;
 if($n==2) return 2;

 return calsteps($n-1)+calsteps($n-2);
}
echo calsteps(10);


