<?php

$n = $argv[1];

function printStarts(){
    for($a=0; $a<=20; $a++)
    echo "*";
}

function loopFactorial($n){
    printStarts();
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;           
    }
        echo "\n". "n!= " . $giai_thua."\n";
        return $giai_thua;
    }
}
loopFactorial($n);
printStarts();
?>