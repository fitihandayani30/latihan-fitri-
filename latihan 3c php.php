<?php

function pangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $pangkat; $i++) {
        $hasil *= $angka;
    }
    echo "$angka pangkat $pangkat = $hasil";
}

pangkat(5, 4);
?>