<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require(__DIR__."/components/error.php");
try{
    $server="localhost:3306";
    $user="root";
    $password="";
    $db="voice";
    error_reporting(E_ALL);
    /**
     * @var \mysqli $con
     */
    $con=mysqli_connect($server, $user, $password, $db);
    if($con){
    }
    else{
        echo  "Error error".mysqli_error($con);
        echo "Failed";
    }
}catch(Exception $e){
    displayErrorToUser("<script> console.log(\"".$e->getMessage()."\")</script>"."Internal server error, you might need to check out the console, !!Yes yes inspect");
}

?>