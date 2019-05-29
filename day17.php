<?php
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
print_r(Combine($arr_A,$arr_B));
function Combine($arr_A,$arr_B){
    $arr = [];
    for($i=0;$i<count($arr_A);$i++){
        $arr[] = $arr_A[$i];
    }
    for ($i=0;$i<count($arr_B);$i++){
        $arr[] = $arr_B[$i];
    }
    //冒泡排序
    for ($i=0;$i<=count($arr);$i++){
        for ($j=1;$j<=$i-1;$j++){
            if ($arr[$j] < $arr[$j-1]){
                $t = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $t;
            }
        }
    }
    return $arr;
}