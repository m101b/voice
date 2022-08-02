<?php
include(__DIR__."/php/database.php");
$login_errors=array();
session_start();
if(isset($_SESSION['userId'])){
  header("location: dashboard.php");
}
if(isset($_POST["login"])){
  $password=$_POST["password"];
  $usernameOrEmail=$_POST["usernameOrEmail"];
  $query="SELECT id,name, password, role FROM user WHERE email=? OR username=?";
  $stmt=mysqli_prepare($con, $query);
  $result=mysqli_stmt_bind_param($stmt, "ss", $usernameOrEmail, $usernameOrEmail);
  try{
    $db_password=null;
    $name=null;
    $db_password=null;
    $role=null;
    $id=null;
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id,$name, $db_password, $role);
    if(mysqli_stmt_fetch($stmt)){
      if(password_verify($password, $db_password)){
        echo $id;
        echo $password;
        echo $name;
        $_SESSION['userId']=$id;
        $_SESSION['userRole']=$role;
        header("Location: dashboard.php");
        die("You are logged in");
      }
      else{
        array_push($login_errors, "Invalid password");
      }
     
    }else{echo
      array_push($login_errors, "User not found");
    }

  }
  catch(Exception $e){
    echo $e->getMessage();
  }
}else{};
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
    <h1>Login to access your account</h1>
    <?php if(count($login_errors)>0){
                for ($i=0; $i < count($login_errors); $i++) {?> 
                    <div class='error'>
                        <p><?php echo $login_errors[$i]; ?></p>
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
      <label for="email">Email</label>
      <input type="text" name="usernameOrEmail" id="email" />
      <br />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" />
      <br />
      <button type="submit" name="login">Login</button>
    </form>
    <p>Don't have an account, <a href="signup.php">create account</a></p>
  </section>
  </div>
<?php 
require(__DIR__."/php/components/footer.php");
?>