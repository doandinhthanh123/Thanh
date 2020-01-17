<?php

// function countAndSum($cacThuNhapTuBanPhim){
    $soLuongSoCanCong = $argv[1];
    $tong = 0;
    for($i = 0; $i < $soLuongSoCanCong; $i++) {
        $tong = $tong + $argv[$i + 2];
    }
    echo "Tong: " . $tong;
// }

// countAndSum($argv);