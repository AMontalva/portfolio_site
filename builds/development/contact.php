<?php $title = "Contact"; ?>
<?php include("header.php"); ?>

<div id="contact">
<!-- OUR FORM -->
<form action="process.php" method="POST">
    <h1>Contact</h1>
    
    <!-- NAME -->
    <div id="name-group" class="form-group">
        <label>Name</label>
        <span class="form"><input type="text" class="form-control" name="name" placeholder=""></span>
        <!-- errors will go here -->
    </div>

    <!-- EMAIL -->
    <div id="email-group" class="form-group">
        <label>Email</label>
        <span class="form"><input type="text" class="form-control" name="email" placeholder=""></span>
        <!-- errors will go here -->
    </div>

    <!-- MESSAGE TEXT -->
    <div id="message-group" class="form-group">
        <label>Message</label>
        <span class="form"><textarea name="messageText" cols="30" rows="10" placeholder=""></textarea></span>
        <!-- errors will go here -->
    </div>

    <button type="submit" class="btn btn-success" id="submit">Submit <span class="fa fa-arrow-right"></span></button>

</form>    
</div>


<?php include("footer.php"); ?>