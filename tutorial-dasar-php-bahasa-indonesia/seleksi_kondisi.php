<?php 
    //pengecekan nilai

    $nilai = 30;
    if ($nilai > 70) {
        echo 'Lulus';
    
    // tambah kondisi
    } else if($nilai <= 60 && $nilai >= 50){
        echo 'Remidi';
    } else {
        echo 'Tidak Lulus';
    }


    echo "\n";

    //switch case
    $kelas = '1A';
    switch ($kelas) {
        case '1A':
            echo 'Kelas 1A';
            break;
        case '1B':
            echo 'Kelas 1B';
            break;
        case '1C':
            echo 'Kelas 1C';
            break;
        default:
            echo 'Kelas 1';
            break;
    }

?>