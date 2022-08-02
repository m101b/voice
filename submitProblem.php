

<?php require(__DIR__."/php/components/dashboardHeader.php");?>
<?php
$organizations=array();
if(isset($_POST['addProblem'])){
    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $visibility=$_POST['visibility'];
    $description=$_POST['description'];
    $organization=$_POST['organization'];
    $expire=$_POST['expireDate']==""?null:$_POST['expireDate'];
    $query="INSERT INTO problem(title, summary,description, visibility, organization,expire_date, author) values (?,?,?,?,?,?,?)";
    try{
        $stmt=mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'sssssss',$title, $summary, $visibility, $description, $organization,$expire,  $_SESSION['userId']);
        $result=mysqli_stmt_execute($stmt);
        if($result){
            echo "Adding the problem has been successfuly";
        }else{
        }
    }catch(Exception $e){
        echo "Error ".$e->getMessage();
    }
}else{
    $query="SELECT id, name,description FROM organization";
    $stmt=mysqli_prepare($con, $query);
    $result=mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if($result){
        $organizations=mysqli_fetch_all($result);
    }else{
        $organizations=array();
    }
    
    
}
?>
    <section class="s-form-container">
        <section>
        </section>
        <section class="form-container">
            <h1>Create the problem</h1>
            <form  method="post">
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
                <input type="radio" name="visibility"  id="visibility" checked>
                <br>
                <label for="description">Description</label>
                <br>
                <textarea  id="" cols="30" rows="10" name="description"></textarea>
                <br>
                <?php if(count($organizations)>0){
                    echo "<select name='organization'>";
                    for ($i=0; $i < count($organizations); $i++) { 
                    ?>
                    <option value="<?php echo $organizations[$i][0]?>"><?php echo $organizations[$i][1]; ?></option>
                <?php 
                } 
                 echo "</select>";
                } else{ ?>name
                <label for="company">Company</label>
                <input type="text" id="organization" name="company"> 
                
                <br>
                <?php } ?>
                <label for="company">Expire date</label>
                <input type="date" id="organization" name="expireDate"> 
                <br>
                <button type="submit" name="addProblem">Submit an issue</button>
            </form>
            <p>
                Please make sure that the problems if not duplicate, if problems already exists please vote it to give a high chance of being resolved
            </p>
        </section>
    </section>
<?php require(__DIR__."/php/components/footer.php");?>