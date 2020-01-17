<?php

$n = $argv[1];
$m = $argv[2];

function printStarts(){
    for($i=0; $i<=20; $i++){
    echo "*";
    }
}
printStarts();
function gcd($n,$m){
if ($m == 0) return $n;
return gcd($m, $n % $m);
}
function lcm($n, $m) {
    return ($n * $m) / gcd($n, $m);
}

echo "\nUoc chung lon nhat la: " . gcd($n, $m)."\n";
echo "\nBoi chung nho nhat la: " . lcm($n, $m)."\n";
printStarts();
?>