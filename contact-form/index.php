<?php $name = $email = $gender = $comments = "-"; ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (empty($_POST['name'])) {
    $nameErr = "Required Name";
  } else {
    $name = $_POST['name'];
  }

  if (empty($_POST['email'])) {
    $emailErr = "Required Email";
  } else {
    $email = $_POST['email'];
  }

  if (empty($_POST['gender'])) {
    $genderErr = "Required Gender";
  } else {
    $gender = $_POST['gender'];
  }

  if (empty($_POST['comments'])) {
    $commentsErr = "Required Comments";
  } else {
    $comments = $_POST['comments'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact-form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
  <div class="d-flex py-5 flex-column justify-content-center align-items-center">
    <h1 class="text-center display-3 mb-3">Contact Us</h1>

    <div class="col-6 mx-auto mb-3">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="mb-3">
          <div class="form-floating d-flex">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
            <label for="name">Name</label>
            <b class="text-danger fs-5" style="margin-left: 5px">*</b>
          </div>
          <div class="text-danger">
            <?= ($nameErr) ?? "" ?>
          </div>
        </div>
        <div class="mb-2">
          <div class="form-floating d-flex">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
            <label for="email">Email</label>
            <b class="text-danger fs-5" style="margin-left: 5px">*</b>
          </div>
          <div class="text-danger">
            <?= ($emailErr) ?? "" ?>
          </div>
        </div>
        <div class="">
          <div class="d-flex gap-3">
            <label for="gender">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="male" value="male" />
              <label class="form-check-label" for="male"> Male </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="female" value="male" />
              <label class="form-check-label" for="female"> Female </label>
            </div>
            <b class="text-danger fs-5">*</b>
          </div>
          <div class="text-danger">
            <?= ($genderErr) ?? "" ?>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-floating gap-2 d-flex">
            <textarea class="form-control" placeholder="Leave a comment here" name="comments" id="comments"></textarea>
            <label for="comments">Comments</label>
            <b class="text-danger fs-5">*</b>
          </div>
          <div class="text-danger">
            <?= ($commentsErr) ?? "" ?>
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
    </div>
    <div class="text-center">
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Comments</th>
        </tr>
        <tr>
          <td><?= $name; ?></td>
          <td><?= $email; ?></td>
          <td><?= $gender; ?></td>
          <td><?= $comments; ?></td>
        </tr>
      </table>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>