<?php include "header.php"?>

<main>
    <div>
<?php 
    if ($_POST['emailType'] =="newAccount") {
        echo "<br><h4>Thank you for reaching out! Keep an eye on your inbox for more information on setting up your account.</h4>";
    }
        
    if ($_POST['emailType'] =="lostPassword") {
        echo "<br><h4>Sorry you're having trouble! You'll receive a temporary login via email soon.</h4>";
    }
?>
</div>
</main>

<?php include "footer.php"?>