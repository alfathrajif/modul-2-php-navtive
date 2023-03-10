<?php 
    $motor = array('supra','jupiter','mio','vario'); //deklarasi array
    //menampilkan semua isi dari array $motor
    print_r($motor);
    //memanggil salah satu element array
    echo $motor [2];
    //menampilkan element dalam array dengan menggunakan looping
    $jumlah = count($motor); //untuk menghitung jumlah element
    echo "<br>";
    for ($i=0; $i < $jumlah; $i++) {
        echo $motor[$i]."<br>";
    }
    // array assosiatif

    $data = array(
        'aku' => 24,
        'kamu' => 27
    );
    echo "Kamu berumur ".$data['kamu'];

    //menggunakan looping
    foreach ($data as $subject => $age) {
        echo $subject." berumur ".$age ." ";
    }

?>