<?php

require_once './lib/db.php';

if (isset($_GET['detail'])) {

  $id = $_GET['detail'];
  $query = mysqli_query($conn, "SELECT * FROM events WHERE id ='$id'");

  $row = mysqli_fetch_array($query);

  if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = mysqli_query($conn, "INSERT INTO users(event_id, fullname, phone, email) VALUES('$id', '$fullname', '$phone', '$email')");

    if ($query) {
      header('Location: ./');
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <?php require_once "./layouts/navbar.php" ?>
  <div class="container py-5">
    <h1 class="display-4 text-center mb-3">Events <?= $row['name']; ?></h1>
    <p class="fs-5 text-center shadow py-3 rounded">
      <?= $row['description']; ?>
    </p>
    <div class="mb-5 shadow p-5 py-3 rounded">
      Tanggal Event : <?= $row['date']; ?>
    </div>
    <div class="shadow col-md-6 mx-auto p-5 rounde">
      <h1 class="display-6 text-center mb-3">Form Pendaftaran</h1>
      <form action="" method="POST">
        <div class="mb-2">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="fullname">
        </div>
        <div class="mb-2">
          <label for="phone" class="form-label">No Telephone</label>
          <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-2">
          <button type="submit" name="submit" class="btn btn-primary w-100">Kirim</button>
        </div>
      </form>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>