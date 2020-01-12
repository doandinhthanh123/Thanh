<?php
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];
$d = $argv[4];

$aPhay = $a + $c;
$bPhay = $b + $d;

echo "(".$a." + ".$b."i) + " ;
echo "(".$c. " + " .$d."i) = ";
echo "(".$aPhay. " + " .$bPhay. "i)\n";

$a2Phay = $a*$c - $b*$d;
$b2Phay = $a*$d + $b*$c;

echo "(".$a." + ".$b."i) * " ;
echo "(".$c. "+" .$d."i) = ";
echo "(".$a2Phay + $a2Phay. "i)\n";

$a3Phay = $a*$c + $b*$d;
$b3Phay = $b*$c + $a*$d;
$c3Phay = $c*$c + $a*$a;

echo "(".$a." + ".$b."i) / " ;
echo "(".$c. " + " .$d."i) = ";
echo "(".$a3Phay - $b3Phay."i)/" .$c3Phay ;
?>