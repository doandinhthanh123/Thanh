<?php

function printStarts(){
    for($i=0; $i<=20; $i++){
        echo "*";
    }
}
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];

function solve($a, $b, $c){
    printStarts();
    $delta = $b * $b - 4 * $a * $c;
    if ($a == 0) {
        echo "\nKhong phai phuong trinh bac 2 mot an.\n";
    } else if ($delta > 0) {
        $x1 = (- $b + sqrt ($delta)) / (2 * $a);
        $x2 = (- $b - sqrt ($delta)) / (2 * $a);
        echo ("\n Phuong trinh co 2 nghiem phan biet: x1 = " . $x1 . " va x2 = " . $x2."\n");
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("\nPhuong trinh co nghiem kep: x1 = x2 = " . $x1)."\n";
    } else if ($delta < 0) {
        echo ("\nPhuong trinh vo nghiem!\n");
    }
}
solve($a, $b, $c);
printStarts();
?>