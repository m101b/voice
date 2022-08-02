
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
    <title>Your voice</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <header>
      <?php if(count($loggedInUser)>0){?>
      <div class="sidebar">
      <button>
          <?php echo $loggedInUser["name"];?>
      </button>
      <a href="signout.php">signout</a>
        <ol>
          <a href="submitProblem.php">Add problem</a>
        </ol>
        <ol>
          <a href="my"></a>
        </ol>
      </div>
    </header>
    <main>
    <?php
    }
    ?>
