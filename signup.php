<?php require("./php/components/header.php");?>
<?php
require("./php/database.php");
if(isset($_POST['register'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmPasswrod=$_POST['confirmPassword'];
    $query="INSERT INTO user(email, username, password) VALUES ('$email', '$username', '$password')";
    $rs=mysqli_query($con, $query);
    if($rs){
        echo "User added successfully";
    }
    else{
        echo "Error occured while adding the user".mysqli_error($con);
    }
}
else{
?>
    <center>
        <h1>Signup</h1>
        <p>You will be required to create an account to  submit an issue or the problem</p>
        <form method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <label for="confirm-password">Confirm password</label>
            <input type="password" name="confirmPassword" id="confirm-password">
            <br>
            <button type="submit" name="register">Signup</button>
        </form>
        <p>
              Already had an account, <a href="login.php"> Signin</a>
        </p>
    </center>
<?php
}
?>
<?php require("./components/footer.php");?>
