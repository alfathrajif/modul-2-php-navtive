<?php 
    // r untuk read
    // w untuk write
    $file = fopen('filedata.txt','w') or die('File Tidak ditemukan');
    $kata = 'Ini adalah kata baru';
    fwrite($file, $kata);
    fclose($file);

?>
