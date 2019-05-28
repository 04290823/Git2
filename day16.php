<?php
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$target = 7;
var_dump(Find($target,$array));
function Find($target,$array){
    $search = '';
    foreach($array as $k=>$v){
        $search .= array_search($target,$v);
    }
    if(!empty($search)){
        return true;
    }else{
        return false;
    }
}