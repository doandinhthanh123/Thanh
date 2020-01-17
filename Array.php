<?php

function sortArray($arr){
    for($i=1; $i<=count($arr)-2; $i++){
        $min = $arr[$i];
        $keyMin=$i;
        for($j=$i+1; $j<count($arr); $j++){
            if($arr[$j] < $min){
                $min = $arr[$j];
                $keyMin=$j;
            }
        }
        $arr[$keyMin]=$arr[$i];
        $arr[$i] = $min;
    }
    print_r ($arr);
}
sortArray([5, 3, 2, 0]);
    
?>