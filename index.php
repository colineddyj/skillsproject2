<?php include 'header.php'?>

<main>
<div id="container1">
<form method="post" action="logout.php">
    <button class="button" type="submit">Logout</button>
</form>
</div>
<div class="welcome">
  <div>
    <h2>Welcome to your IT support system.</h2>
    <hr>
  </div>
  <div class="form1">
    <form action="problem.php" method="post">
      <select class="input" name="title" id="title">
        <option value="Mr">Mr.</option>
        <option value="Mrs">Mrs.</option>
        <option value="Ms">Ms.</option>
        <option value="Dr">Dr.</option>
      </select>
      <input class="input" type="text" name="fName" placeholder="First Name">
      <input class="input" type="text" name="lName" placeholder="Last Name">
      <select class="input" name="role" id="role">
        <option value="Admin">Admin</option>
        <option value="Manager">Manager</option>
        <option value="CEO">CEO</option>
      </select>
      <button class="button" type="submit" name="login">Login</button>
    </div>
  </form>
</div>
</main>

<?php include "footer.php" ?>