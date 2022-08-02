<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your voice</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <?php
    if(!isset($internal_server_error)){
    ?>
      <nav>
          <h1><a href="index.php">Your voice</a> </h1>
          <a href="index.php" class="active">Home</a>
          <a href="about.php">About</a>
          <a href="problems.php">Problems</a>
          <a href="login.php">Login</a>
      </nav>
    <?php }  ?>
