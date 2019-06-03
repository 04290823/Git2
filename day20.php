<?php
$x = 1;
$y = 1;
print_r(CountSteps($x,$y));
function CountSteps($x,$y){
    for ($i=0;$i<$x;$i++){
        for ($j=0;$j<$y;$j++){
            return $x+$y;
        }
    }
}