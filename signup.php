<?php
require(__DIR__."/php/database.php");
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmPasswrod=$_POST['confirmPassword'];
    $query="INSERT INTO user(name,email, username, password) VALUES ('$name','$email', '$username', '$password')";
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
<?php require(__DIR__."/php/components/header.php");?>
<div class="s-form-container">
    <section class="form-container">
            <h1>Create an Account</h1>
            <form method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="johndoe@example.com">
                <br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="john_example">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="I am secret">
                <br>
                <label for="confirm-password">Confirm password</label>
                <input type="password" name="confirmPassword" id="confirm-password"  placeholder="I am secret">
                <br>
                <button type="submit" name="register">Signup</button>
            </form>
            <p>
                Already had an account, <a href="login.php"> Signin</a>
            </p>
    </section>
</div>
<?php
}
?>
<?php require(__DIR__."/php/components/footer.php");?>
