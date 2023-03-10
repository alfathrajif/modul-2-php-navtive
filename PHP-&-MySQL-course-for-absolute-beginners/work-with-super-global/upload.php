<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      max-width: 300px;
      gap: 10px;
    }

    button {
      width: fit-content;
    }
  </style>
</head>


<body>

  <form action="./upload-action.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">SUBMIT</button>
  </form>

</body>

</html>