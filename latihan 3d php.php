<?php

function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
   
    }
    echo "Faktor dari $a = $hasil";
}

faktorial(5);

?>
