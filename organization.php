

<?php 
    require(__DIR__."/php/components/dashboardHeader.php");
    require(__DIR__."/php/constants/districts.php");

?>
<?php
$organization=array();
if(isset($_POST['addOrganization'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $query="INSERT INTO organization(name, description, location, owner) values (?,?,?, ?)";
    try{
        $stmt=mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'ssss',$name, $description,$location, $_SESSION["userId"]);
        $result=mysqli_stmt_execute($stmt);
        if($result){
            echo "Adding the problem has been successfuly";
        }else{
        }
    }catch(Exception $e){
        echo "Error ".$e->getMessage();
    }
}

if(isset($_POST['editOrganization'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $organization=$_POST['organization'];
    $query="UPDATE TABLE organization set name=? description=? location=? owner=? WHERE orginizationId=? and owner=?";
    try{
        $stmt=mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'ssss',$name, $description,$location, $organization , $_SESSION["userId"]);
        $result=mysqli_stmt_execute($stmt);
        if($result){
            echo "The problem has been added successfully";
        }else{
        }
    }catch(Exception $e){
        echo "Error ".$e->getMessage();
    }
}
if(isset($_GET["organizationId"])){
    $query="SELECT id, name, description FROM organization WHERE id=?";
    $stmt=mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $_GET["organizationId"]);
    mysqli_stmt_execute($stmt);
    if($result){
        $result=mysqli_stmt_get_result($stmt);
        $organization=mysqli_fetch_assoc($result);
    }else{
        die("organization not found");
    }
}

?>
    <section class="s-form-container">
        <section>
        </section>
        <section class="form-container">
            <h1>Add the organization</h1>
            <form  method="POST">
                <label for="title">
                    name
                </label>
                <input type="text" name="name"  id="name" value="<?php if(isset($organization["name"])) echo $organization["name"];?>">
                <br>
            
                <label for="description">
                    About the organization
                </label>
                <br>
                <textarea id="description" cols="30" rows="10" name="description"><?php if(isset($organization["description"])) echo $organization["description"];?></textarea>
                <br>
                <label for="">Location</label>
                <select name="location" id="location[]" multiple>
                    <?php
                    for ($i=0; $i < count(DISTRICTS); $i++) { 
                       ?>
                       <option value="<?php echo DISTRICTS[$i]?>" <?php if(isset($organization["location"])&&$organization["location"]==DISTRICTS[$i]){ echo "checked";}?>><?php echo DISTRICTS[$i]?></option>
                    <?php
                    }
                    ?>
                </select>
                
                <?php if(count($organization)>0){ ?>
                    <input type="hidden" name="organization" value="<?php echo $organization["id"]?>">
                    <button type="addOrganization" name="organization">Edit organization</button>
                <?php }else{?>
                    <button type="editOrganization" name="organization">Add organization</button>                    
                <?php } ?>
            </form>
        </section>
    </section>
<?php require(__DIR__."/php/components/footer.php");?>