<?php

$x = $argv[1];

function vampire($x){
    $len = strlen ($x);
    if($x%2 == 0 && $len($x)%2 == 0){
        $arr1 = str_split($x);
        sort($arr1);
        $atr1 = implode($arr1);
        
        for ($i =pow(10, $len/2-1); $i <=pow(10,$len/2)-1  ; $i++){
            $j = $x / $i;

            if(strlen($j) % ($len/2) == 0 && is_int($j));
                $arr2 = str_split();
                sort($arr2);
                $str2 = str_split(implode([$i,$j]));
        }
        }
    }
    vampire($x);
?>