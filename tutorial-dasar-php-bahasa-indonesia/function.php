<?php 
    //function dibuat untuk mempermudah membuat langkah-langkah yang dikerjakan berulang-ulang
    //parameter $a untuk angka pertama, $b untuk angka kedua
    function pertambahan($a,$b){
        $hasil = $a + $b;
        return $hasil;
    }

    function tampilanKata(){
        $kata = 'Hallo Dunia';
        return $kata;
    }

    //menerapkan looping didalam function

    function loop($counter){
        $kata = 'Hallo Dunia'." <br>";
        for ($i=0; $i <= $counter ; $i++){
            echo $kata;
        }
    }

    //panggil function
    echo pertambahan(10,20);
    echo tampilanKata();
    loop(10);

?>