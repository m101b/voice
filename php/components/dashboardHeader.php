
<?php
include(__DIR__."/../database.php");
$loggedInUser=array();
session_start();
if(isset($_SESSION["userId"])){
  $query="SELECT * FROM user WHERE id=?";
  $stmt=mysqli_prepare($con, $query);
  $result=mysqli_stmt_bind_param($stmt, "i", $_SESSION["userId"]);
  try{
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if($result){    
      $loggedInUser=mysqli_fetch_assoc($result);
      if($loggedInUser){
      }else{
        $loggedInUser=array();
      }
    }else{
      echo mysqli_stmt_error($stmt);
    }

  }
  catch(Exception $e){
    echo $e->getMessage();
  }
}else{
  header("location: login.php");
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our voice</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <main>  
    <?php
    if(!isset($internal_server_error)){
    ?>
      <header>
        <nav>
        <?php if(count($loggedInUser)>0){?>

            <h1><button><?php echo $loggedInUser["name"];?></button> </h1>
            <a href="submitProblem.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "submitProblem.php")) echo 'active' ?>">Problem</a>
            <a href="organization.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "organization.php")) echo 'active' ?>">Orginizations</a>
            <a href="myProblems.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "signout.php")) echo 'active' ?>">My problems</a>
            <a href="signout.php" class="<?php if(str_contains($_SERVER["REQUEST_URI"], "signout.php")) echo 'active' ?>">Signout</a>
        </nav>
      </header>
    <?php }  ?>
    <?php }  ?>
