<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $name = "Darry";
  // variable tidak boleh menggunakan spasi dan menggunakan awalan angka
  echo "My name is" . $name . "<br>";
  // mencetak my nam is dengan mengambil $name lalu break
  // gunakan titik '.' untuk mengambung variable yg dipanggil dengan stringnya
  $name = "Udacode"; // betul
  $Name = "Udacode"; // betul
  // $9name = "Uda_aja"; // tidak betul
  $_name = "Udacoding"; // betul
  $_9n4me = "Udacoding"; // betul
  ?>

</body>

</html>