<?php 
 include_once  'header.php';
?>


<div class="form">

   <h1>Crypto Money Bro</h1>
   <br>
   <br>
   <br>
  <form action="includes/login.inc.php" method="post">

    <input type="text" id="fname" name="uid" placeholder="Email/Username">
    <input type="password" id="pass" name="pwd" placeholder="Password">
    <!-- <input type="submit" value="Submit"> -->
    <button name=submit name=submit>Login</button>

  </form>

  <p>New Here ? <a href="signup.php">Register.</a></p>

  </div>

<?php 
include_once  'footer.php';
?>
