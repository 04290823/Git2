<?php
$num1 = 5;
$num2 = 2;
print_r(Add($num1,$num2));
function Add($num1,$num2){
    $arr[] = $num1;
    $arr[] = $num2;
    return array_sum($arr);
}