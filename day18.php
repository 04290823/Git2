<?php

$n = 11;
print_r(NumberOf1($n));
function NumberOf1($n){
    $one = decbin($n);
    $two = substr_count($one,1);
    return $two;
}