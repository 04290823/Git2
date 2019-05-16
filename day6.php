<?php
$n = 1;
$m = 14;
print_r(calFn($n,$m));
function calFn($n,$m){
    //定义一个空数组
    $data = [];
    //循环几到几的数字
    for($i = $n;$i<=$m;$i++){
        //计算为1的字符串
        $data[] = substr_count($i,1);
    }
    //计算总和
    return array_sum($data);
}