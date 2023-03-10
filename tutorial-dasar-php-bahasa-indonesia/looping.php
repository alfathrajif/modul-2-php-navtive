<?php 
    // membuat looping untuk string
    echo "Menggunakan while \n";
    $kata = 'Halo';
    $count = 0;
    while ($count <= 10) {
        echo $kata."\n";
        $count++;
    }

    echo "Menggunakan for \n";

    for ($i=1; $i <= 10; $i++) {
        echo $kata."\n";
    }
?>


// membuat decrements
    $i = 10;
    while ($i >=0) {
        echo $i."\n";
        $i--;
    }


