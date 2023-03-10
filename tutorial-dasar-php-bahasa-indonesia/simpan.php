<?php 
    include 'conn.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $row = mysqli_query($conn,"insert into mahasiswa(nim,nama,jurusan) values('$nim','$nama','$jurusan')");
    header('location:crud.php');


?>