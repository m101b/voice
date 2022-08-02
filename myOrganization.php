
<?php require(__DIR__."/php/components/dashboardHeader.php");?>

<div class="s-form-container">
    <section>
        <ul>
            <a href="./myOrganization.php">My organization</a>
            <a href="./myProblems.php">My problems</a>
            <a href="./myProblems.php"> </a>
        </ul>
    </section>
    <section>  <nav>
        <?php if(count($loggedInUser)>0){?>

            <h1><button><?php echo $loggedInUser["name"];?></button> </h1>
            <a href="submitProblem.php" class="active">Add problem</a>
            <a href="organization.php">Add orginization</a>
            <a href="myProblems.php">My problems</a>
            <a href="signout.php">Signout</a>
        </nav>

    </section>
</div>
<?php 
require(__DIR__."/php/components/footer.php");
?>