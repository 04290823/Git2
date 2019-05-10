<?php
$data = "Have you ever gone shopping and";
//调用函数
print_r(index($data));
function index($data){
    //把字符串转换为数组
    $data = str_split($data);
    //统计字母出现的次数
    $arr = array_count_values($data);
    foreach($arr as $k=>$v){
        //第一个大于3次的字母返回
       if($v>=3){
           return $k;
       }
    }
}