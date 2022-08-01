<?php require("./php/components/header.php");?>
    <center>
      <h1>Login</h1>
      <p>
        Login and submit an issue or the problem to make the world a better
        place
      </p>

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
    </center>

    <?php require("./components/footer.php");?>