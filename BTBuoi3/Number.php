<?php

$argvPhay = $argv[1];

function countAndSum($argvPhay){
    $sum = 0;
    $count = 0;
    for($i = 2; $i <= $argvPhay[1]+1; $i++){
        $sum += $argvPhay[$i];

    if($argvPhay[$i] % 2 == 1){
        $count++;
    }
}
    echo "Tong cac so la " . $sum.", co ".$count." so le"."\n";
}
function printStarts(){
    for ($a = 1; $a <=20; $a++){
        echo "*";
    }
    echo "\n";
}
printStarts();
countAndSum();
?>