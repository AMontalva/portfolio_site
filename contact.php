<?php $title = "Contact"; ?>
<?php include("header.php"); ?>

<!-- OUR FORM -->
<form action="process.php" method="POST">
	<h1>Contact</h1>
    
    <!-- NAME -->
    <div id="name-group" class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="">
        <!-- errors will go here -->
    </div>

    <!-- EMAIL -->
    <div id="email-group" class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="">
        <!-- errors will go here -->
    </div>

    <!-- SUPERHERO ALIAS -->
    <div id="superhero-group" class="form-group">
        <label>Message</label>
        <textarea name="superheroAlias" cols="30" rows="10" placeholder=""></textarea>
        <!-- errors will go here -->
    </div>

    <button type="submit" class="btn btn-success" id="submit">Submit <span class="fa fa-arrow-right"></span></button>

</form>

<?php include("footer.php"); ?>