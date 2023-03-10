<?php

require_once './lib/db.php';

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
    <h1 class="mb-4 text-center">List Events</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $query = mysqli_query($conn, "SELECT * FROM events");
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center"><?= $row['name']; ?></h5>
              <p class="card-text"><?= $row['description']; ?></p>
              <a href="./detail.php?detail=<?= $row['id'] ?>" class="w-100 btn btn-danger">
                <i class="bi bi-pen"></i>
                Daftar Event
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>