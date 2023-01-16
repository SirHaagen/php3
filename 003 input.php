<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - GET AN INPUT VALUE</title>
</head>

<body>

  <form action="003 input.php" method="get">
    Name: <input type="text" name="username" autocomplete="off">
    Age: <input type="number" name="age" autocomplete="off">
    <input type="submit" value="Submit">
  </form>

  <?php

  echo "<br>Your name is " . trim($_GET["username"]);
  echo "<br>Your age is " . $_GET["age"];

  ?>

</body>

</html>