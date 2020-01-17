<?php

$a = $argv[1];

function printStarts(){
    for($i=0; $i<=20; $i++){
        echo "*";
    }
}
function printSchedule($a){
    printStarts();
    if ($a==1){
        echo "\nChu Nhat, duoc nghi\n";
    }
    else if ($a==2){
        echo "\nThu Hai, hoc buoi sang\n";
    }
    else if ($a==3){
        echo "\nThu Ba, hoc buoi sang\n";
    }
    else if ($a==4){
        echo "\nThu Tu, hoc buoi chieu\n";
    }
    else if ($a==5){
        echo "\nThu Nam, hoc buoi sang\n";
    }
    else if ($a==6){
        echo "\nThu Sau, hoc buoi chieu\n";
    }
    else if ($a==7){
        echo "\nThu Bay, hoc buoi chieu\n";
    }
    else echo "\nThu khong hop le\n";
} 
    printSchedule($a);
printStarts();
?>