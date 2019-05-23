<?php
$str = 5;
print_r(Sum_Solution($str));
function Sum_Solution($n){
    $arr = range(1,$n);
    $sum = array_sum($arr);
    return $sum;
}