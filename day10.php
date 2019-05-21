<?php
$arr = [2,4,3,6,3,2,5,5];
print_r(FindNumsAppearOnce($arr));
function FindNumsAppearOnce($arr){
    $data = array_count_values($arr);
    $str = [];
    foreach($data as $k=>$v){
        if($v == 1){
            $str[] = $k;
        }
    }
    return $str;
}