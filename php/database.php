<?php
$server="localhost:3306";
$user="root";
$password="";
$db="voice";

/**
 * @var \mysqli $con
 */
$con=mysqli_connect($server, $user, $password, $db);
if($con){
    echo "Byakunze";
}
else{
    echo "Ntibigerayo ".mysqli_error($con);
}
?>