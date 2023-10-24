<?php 
 include_once  'header.php';
?>


<div class="form">

   <h1>Crypto Money Bro</h1>
   <br>
   <br>
   <br>
  <form action="includes/signup.inc.php" method="post">

    <input type="text" id="fname" name="firstname" placeholder="Name">
    <input type="text" id="lname" name="email" placeholder="Email">
    <input type="text" id="lname" name="username" placeholder="UserName">
    <input type="text" id="lname" name="password" placeholder="Password">
    <input type="text" id="lname" name="Repassword" placeholder=" Repeat Password">
    <!-- <input type="submit" value="Submit"> -->
    <button name=submit name=submit>Sign Up</button>

  </form>
  <p>Already have an account? <a href="login.php">Log in.</a></p>
  </div>

<?php 
include_once  'footer.php';
?>
