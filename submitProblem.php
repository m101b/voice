

<?php require(__DIR__."/php/components/dashboardHeader.php");?>
<?php
if(isset($_POST['addProblem'])){
    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $visibility=$_POST['visibility'];
    $description=$_POST['description'];
    $organization=$_POST['organization'];
    $query="INSERT INTO problem(title, summary,description, visibility, organization) values (?,?,?,?, ?)";
    try{
        $stmt=mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'sssss',$title, $summary, $visibility, $description, $organization);
        $result=mysqli_stmt_execute($stmt);
        if($result){
            echo "Adding the problem has been successfuly";
        }else{
        }
    }catch(Exception $e){
        echo "Error ".$e->getMessage();
    }
}
?>
    <section class="s-form-container">
        <section>
        </section>
        <section class="form-container">
            <h1>Create the problem</h1>
            <form >
                <label for="title">
                    Title
                </label>
                <input type="text" name="title"  id="title">
                <br>
                <label for="summary">
                    summary
                </label>
                <input type="text" name="summary"  id="summary">
                <br>
                <label for="title">
                    Visibility
                </label>
                <br>
                Private
                <input type="radio" name="visibility"  id="visibility">
                Public
                <input type="radio" name="visibility"  id="visibility">
                <br>
                <label for="description">Description</label>
                <br>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <br>
                <label for="company">Company</label>
                <input type="text" id="company" name="company"> 
                <br>
                <button type="submit">Submit an issue</button>
            </form>
            <p>
                Please make sure that the problems if not duplicate, if problems already exists please vote it to give a high chance of being resolved
            </p>
        </section>
    </section>
<?php require(__DIR__."/php/components/footer.php");?>