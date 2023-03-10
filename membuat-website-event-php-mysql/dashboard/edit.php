<?php

require_once '../lib/db.php';

if (isset($_GET['edit'])) {
  $id = $_GET['edit'];

  $query = mysqli_query($conn, "SELECT * FROM events WHERE id='$id'");
  $row = mysqli_fetch_array($query);

  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $query = mysqli_query($conn, "UPDATE events SET name='$name', description='$description', date='$date' WHERE id='$id' ");

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

  <div class="container py-5">
    <div class="col-md-6 mx-auto">
      <div class="d-flex gap-2">
        <a href="../dashboard" class="btn btn-primary mb-3 shadow" class="btn btn-primary">Back to Dashboard</a>
        <a href="../" class="btn btn-dark mb-3 shadow" class="btn btn-primary">Lihat Website</a>
      </div>
      <form action="" class="shadow p-4" method="POST">
        <h2 class="mb-3 text-center">Edit Events</h2>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Events</label>
          <input type="text" class="form-control" id="nama" name="name" value="<?= $row['name']; ?>">
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi Events</label>
          <textarea class="form-control" name="description" id="deskripsi" rows="5"><?= $row['description']; ?></textarea>
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">Nama Events</label>
          <input type="date" class="form-control" id="date" name="date" value="<?= $row['date']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>