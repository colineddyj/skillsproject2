<?php include "header.php"?>

<main>
    <div id="container1">
        <form method="post" action="logout.php">
            <button class="button" type="submit">Logout</button>
        </form>
    </div>
    <div class="welcome">
        <h2>Create a New Account</h2>
        <hr>
        <h4>Please provide your information below:</h4>
        <form action="send-email.php" method="post">
            <input class="input" type="text" name="fullName" placeholder="First Name">
            <input class="input" type="text" name="subject" placeholder="Last Name">
            <input class="input" type="text" name="body" placeholder="Email Address">
            <input class="input" type="hidden" name="emailType" value="newAccount">
            <button class="button" type="submit" name="login">Send</button>
        </form>
    </div>
</main>

<?php include "footer.php"?>