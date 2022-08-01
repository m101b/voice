<?php
require(__DIR__."/php/database.php");
$signup_errors=array();
if(isset($_POST['register'])){
    $errors=array();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    if($password!=$confirmPassword){
        array_push($signup_errors,"Password don't match");
    }else{
        $password=password_hash($password, PASSWORD_DEFAULT);
        $query="INSERT INTO user(name,email, username, password) VALUES (?,?,?,?)";
        $statement= mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($statement, 'ssss', $name, $email,$username,$password);
        try{
            $rs=mysqli_stmt_execute($statement);
            if($rs){
                header("Location: login.php");
            }
            else{
                echo "Error occured while adding the user".mysqli_stmt_error($statement);
            }
        }catch(Exception $e){
            array_push($signup_errors,str_replace("Duplicate entry", "User with", $e->getMessage()."already exists."));
        }
    }
}
?>
<?php require(__DIR__."/php/components/header.php");?>
<div class="s-form-container">
    <section>
        <h1>You are welcome</h1>
        <p>Please create an account and start working.</p>
        <div>
            <img src="./images/login.svg" width="80%">
        </div>
    </section>
    <section class="form-container">
       
            <h1>Create an Account</h1>
            <?php if(count($signup_errors)>0){
                for ($i=0; $i < count($signup_errors); $i++) {?> 
                    <div class='error'>
                        <p><?php echo $signup_errors[$i]; ?></p>
                    </div>
                    <script>
                        alert("test");
                        document.querySelectorAll(".error").forEach(element=>setTimeout(() => {
                            element.classList.add("hidden");
                        }, 3000);)
                    </script>
            <?php
                }
                echo "<script>
                alert('test');
                document.querySelectorAll('.error').forEach(element=>setTimeout(() => {
                    element.classList.add('hidden');
                }, 3000);)
            </script>";

            }?>
            <form method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required="true" min="12">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="johndoe@example.com" required>
                <br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="john_example" required>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="I am secret" required min="12">
                <br>
                <label for="confirm-password">Confirm password</label>
                <input type="password" name="confirmPassword" id="confirm-password" required placeholder="I am secret" min="12">
                <br>
                <button type="submit" name="register">Signup</button>
            </form>
            <p>
                Already had an account, <a href="login.php"> Signin</a>
            </p>
    </section>
</div>
<?php require(__DIR__."/php/components/footer.php");?>
