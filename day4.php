<?php
$n = 10;
print_r(calSteps($n));
function calSteps($n){
    if($n == 0){
        return 1;
    }
    $arr = [1,1,2];
    if($n < 3){
        return $arr[$n];
    }
    //递归
    return calSteps($n-1)+calSteps($n-2);
}