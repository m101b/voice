<?php require(__DIR__."/php/components/header.php");?>
    <center>
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
    </center>
<?php require(__DIR__."/php/components/footer.php");?>