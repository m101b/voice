
<?php require(__DIR__."/php/components/dashboardHeader.php");?>
<?php 
if(isset($_POST['edit'])){
    $name=$POST["name"];
    $name=$POST["name"];
    $name=$POST["name"];
}
?>

<div class="s-form-container">
    <section>
        <ul style="text-align: left; list-style: none;">
            <li><button><a href="./myOrganization.php" class="silent dark">My organization</a></button></li>
            <li><button><a href="./myProblems.php" class="silent dark">My problems</a></button></li>
            <?php if($loggedInUser["role"]=="admin"){?>
                <li><button><a href="./users.php" class="silent dark">Users</a></button></li>
            <?php }?>
        </ul>
    </section>
    <section class="form-container" style="margin: 10px;">
        <form method="post" id="signupForm">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required="true" min="12" value="<?php echo $loggedInUser['name'] ?>">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="johndoe@example.com" required value="<?php echo $loggedInUser['email'] ?>">
                <br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="john_example" required value="<?php echo $loggedInUser['username'] ?>">
                <br>
                <button type="submit" name="edit">Edit info</button>
        </form>
    </section>
    
</div>
<?php 
require(__DIR__."/php/components/footer.php");
?>