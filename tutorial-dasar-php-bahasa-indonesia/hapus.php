<?php 
    include 'conn.php';
    $id = $_GET['id'];
    $row = mysqli_query($conn,"delete from mahasiswa where id_mahasiswa = '$id'");
    header('location:crud.php');


?>