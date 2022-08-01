
<?php
include(__DIR__."/php/database.php");
$login_errors=array();
session_start();
if(isset($_SESSION["userId"])){
  $user_name="";
  $user_role="";
  $user_username="";
  $user_email="";
  $user_id=null;
  $user_registration_date="";
  $query="SELECT id,name,role,email, username, registration_date FROM user WHERE userId=?";
  $stmt=mysqli_prepare($con, $query);
  $result=mysqli_stmt_bind_param($stmt, "i", $_SESSION["userId"]);
  try{
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $user_id, $user_name, $user_role, $user_email, $user_username, $user_registration_date);
    if(!mysqli_stmt_fetch($stmt)){
      array_push($login_errors, "User not found");
    }

  }
  catch(Exception $e){
    echo $e->getMessage();
  }
}else{};
?>
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
