<?php include 'header.php'?>

<main>
    <div id="container1">
        <form method="post" action="logout.php">
            <button class="button" type="submit">Logout</button>
        </form>
    </div>
    <h2>Welcome <?php echo $_POST["role"]; ?></h2>
    <hr>
    <h3>Please select one of the following options:</h3>
    <?php 
        if ($_POST['role'] =="Admin") {
            echo "<p><a href='new-account.php'>Create a new account</a><br><a href='isnt-working.php'>My computer isn't working</a></p>";
        }
            
        if ($_POST['role'] =="Manager") {
            echo "<p><a href='lost-password.php'>I lost my password</a><br><a href='isnt-working.php'>My computer isn't working</a></p>";
        }
            
        if ($_POST['role'] =="CEO") {
            echo "<p><a href='need-help.php'>I need help</a><br><a href='isnt-working.php'>My computer isn't working</a></p>";
        }

    ?>
</main>

<?php include "footer.php"?>