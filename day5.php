<?php
$arr = [1,2,3,4,5,6,7,8,9];
print_r(index($arr));
function index($arr){
    //定义两个空数组
    $cardinal_number = [];
    $even_number = [];
    foreach($arr as $k=>$v){
        //判断偶数
        if($v % 2 == 0)
            $even_number[] = $v;
        //判断基数
        else if($v % 2 == 1)
            $cardinal_number[] = $v;
    }
    //循环放入一个数组中
    foreach($even_number as $k=>$val){
        $cardinal_number[] = $val;
    }
    return $cardinal_number;
}