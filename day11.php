<?php
$str = 'student. a am I';
print_r(ReverseSentence($str));
function ReverseSentence($str){
    $arr = explode(' ',$str);
    $data = [];
    for($i=0;$i<count($arr);$i++){
        array_unshift($data,$arr[$i]);
    }
    return implode(' ',$data);
}