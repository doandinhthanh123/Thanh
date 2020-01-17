<?php

$a = $argv[1];

function printStarts(){
    for($i=0; $i<=20; $i++){
        echo "*";
    }
}

function classifyFluid($a) {
    printStarts();
    if($a>40){
        echo "\nExtra strong liquor\n";
    }
    else if($a>20 && $a<=40){
        echo "\n Strong liquor \n";
    }
    else if($a>15 && $a<=20){
        echo "\nLiquor\n";
    }
    else if($a>12 && $a<=15){
        echo "\nStrong vine\n";
    }
    else if($a>10.5 && $a<=12){
        echo "\nNornoman vine\n";
    }
    else if($a<=10.5){
        echo "\nLight vine\n";
    }

} 
classifyFluid($a);
printStarts();
?>