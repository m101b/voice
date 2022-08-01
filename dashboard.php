<?php
include(__DIR__."/php/database.php");

?>
<?php require(__DIR__."/php/components/dashboardHeader.php");?>
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