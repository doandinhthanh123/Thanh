<?php

    $a = $argv[1];
    $b = $argv[2];

    if( $a > $b ){ 
        echo "So lon nhat la a\n";
        echo "So nho nhat la b";
     }
    elseif( $a == $b ){ 
        echo "Hai so bang nhau"; 
     } 
    elseif ($a < $b) { 
        echo "So lon nhat la b\n";
        echo "So nho nhat la a";
     }  
?>
