<?php

function check($arr){
    $length = count($arr);
        for($i=0; $i<$length; $i++){
            $count = 0;
            for ($x = 1; $x <= $arr[$i]/2; $x++){
                if($arr[$x]%$i == 0){
                    $count += $i;
                    if($arr[$x] == $count){
                        echo "So hoan hao la " .$arr[$i]. "\n";
                    }
                }   
            }
        } 
}
check([1, 2, 3, 6, 4]);
 $length = count($arr);
 
?>