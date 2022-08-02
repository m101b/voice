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
          <h1><a href="index.php">">Our voice</a> </h1>
          <a href="index.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "index.php")) echo 'active' ?>">Home</a>
          <a href="about.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "about.php")) echo 'active' ?>">About</a>
          <a href="problems.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "problems.php")) echo 'active' ?>">Problems</a>
          <a href="login.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "login.php")) echo 'active' ?>">Login</a>
      </nav>
    <?php }  ?>
