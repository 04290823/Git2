<?php
$a = 6;
print_r(GetUglyNumber_Solution($a));
function GetUglyNumber_Solution($index){
    //循环于0 同时除2
    while($index % 2 == 0 ){
        $index = $index/2;
    }
    //循环于0 同时除3
    while($index % 3 == 0 ){
        $index = $index/3;
    }
    //循环于0 同时除5
    while($index % 5 == 0 ){
        $index = $index/5;
    }
    //判断除出来的数字为1就是为丑数
    if($index == 1){
        return '是丑数';
    }else{
        return '不是丑数';
    }
}