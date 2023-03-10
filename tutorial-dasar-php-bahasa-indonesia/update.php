<?php 
    include 'conn.php';
    $id = $_GET['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $row = mysqli_query($conn,"update mahasiswa set nim='$nim', nama='$nama' , jurusan='jurusan' , where id_mahasiswa = '$id'");
    header('location:crud.php');


?>