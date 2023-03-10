<?php

require_once "./includes/header.php";
require_once "./includes/db.php";
?>

<div class="container">
  <h1 class="display-5 text-center">Register</h1>
  <form action="./includes/register-inc.php" method="post" class="col-5 mx-auto">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password"></input>
    </div>
    <div class="mb-3">
      <label for="confirm_password" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirm_password" name="confirm_password"></input>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" name="submit">Register</button>
    </div>
  </form>
</div>
<?php require_once "./includes/footer.php" ?>