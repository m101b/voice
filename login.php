<?php require(__DIR__."/php/components/header.php");?>
  <section class="form-container">
    <h1>Login to access your account</h1>
    <form>
      <label for="email">Email</label>
      <input type="text" name="email" id="email" />
      <br />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" />
      <br />
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account, <a href="signup.php">create account</a></p>
  </section>
<?php require(__DIR__."/php/components/footer.php");?>