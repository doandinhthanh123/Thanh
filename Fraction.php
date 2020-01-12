<?php
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];
$d = $argv[4];

$e = "$a/$b";
$f = "$c/$d";

echo $e. " + " .$f. " = ";
echo  $a*$d + $c*$b . "/" . $b * $d. "\n";

echo $e. " - " . $f. " = ";
echo $a*$d - $c*$b . "/" . $b*$d. "\n";

echo $e. " * " . $f. " = ";
echo $a*$c. "/" . $b*$d. "\n";

echo $e. " / " . $f. " = ";
echo $a*$d. "/" . $b*$c;

?>