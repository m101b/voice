<?php 
function displayErrorToUser($error){
    $internal_server_error=true;
     require(__DIR__."/header.php");
     echo $error;  
     require(__DIR__."/footer.php");
     die();
}
?>