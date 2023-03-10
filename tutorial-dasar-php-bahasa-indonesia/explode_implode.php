<?php 
    //explode untuk memisahkan satu kalimat
    $kata = 'Hallo Dunia Selamat Siang';
    $exp = explode(' ', $kata); //pemisah spasi
    echo $exp[0].$exp[1];

    echo "<br>";
    //implode untuk menyatukan kata yang telah terpisah menjadi satu kalimat dengan penghubung
    echo implode('**', $exp);
?>