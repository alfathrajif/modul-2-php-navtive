<?php

require_once '../lib/db.php';

$msgInsert = "";
$msgDelete = "";

if (isset($_POST['add'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);

  $query = mysqli_query($conn, "INSERT INTO events(name, description, date) VALUES ('$name', '$description', '$date')");

  if ($query) {
    $msgInsert = "<div class='alert alert-success' role='alert'>Added Successful!</div>";
  } else {
    $msgInsert = "<div class='alert alert-danger' role='alert'>Added Failed!</div>";
  }
}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $query = mysqli_query($conn, "DELETE FROM events WHERE id='$id'");

  if ($query) {
    $msgDelete = "<div class='alert alert-danger' role='alert'>Data Deleted!</div>";
  } else {
    $msgDelete = "<div class='alert alert-danger' role='alert'>Data Failed Deleted!</div>";
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Event</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Events</label>
              <input type="text" class="form-control" id="nama" name="name">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi Events</label>
              <textarea class="form-control" name="description" id="deskripsi" rows="5"></textarea>
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Nama Events</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="add">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container py-5">
    <h1 class="text-center display-4 mb-4">Dashboard Event</h1>
    <div class="row gap-4">
      <?= $msgInsert ?>
      <?= $msgDelete ?>
      <div class="col-8 shadow p-3">
        <button class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Event</button>
        <a href="../" class="btn btn-dark" class="btn btn-primary">Lihat Website</a>
        <table class="table">'
          <thead>
            <tr>
              <th>Nama Event</th>
              <th>Deskripsi Event</th>
              <th>Tanggal Event</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $query = mysqli_query($conn, "SELECT * FROM events");
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['description']; ?></td>
                <td><?= $row['date']; ?></td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Action Button
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../dashboard/edit.php?edit=<?= $row['id']; ?>">Edit</a></li>
                      <li><a class="dropdown-item" href="../dashboard?delete=<?= $row['id']; ?>">Hapus</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col shadow p-3">
        <h2>List User Event</h2>
        <div>
          <ul class="list-group">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM users INNER JOIN events ON events.id=users.event_id");
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <li class="list-group-item">
                <span class="badge bg-primary"><?= $row['name']; ?></span> /
                <span><?= $row['fullname']; ?></span> /
                <span><?= $row['email']; ?></span>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>