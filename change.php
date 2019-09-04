<?php

/* Include database connection file */

		require_once("inc/connect.php");

/* Starting Session */
session_start();

/*Variables */
$username = $_SESSION['username'];
$error_message = '';


if(isset($_POST['submit']))
     {
       $oldpw = $_POST ['oldpw'];
 $newpw = $_POST ['newpw'];

 $sql = mysqli_query("SELECT * FROM users WHERE password = '$oldpw'");
   if ($sql)

   {
       $row = mysqli_fetch_array($sql);
       extract ($row);

       if ($oldpw <> $password) {
           echo "Passwords dont match";}

           else

       if ($newpw == $retypepw){
        $update = mysqli_query("UPDATE users SET  password = '$newpw' WHERE password = '$oldpw' ") or die (mysql_error());
            if($update) { $error_message = 'Password do not match!';  }
        }

    else { $error_message = 'Password is incorrect!';}
    }
	 }
    ?>


<!DOCTYPE HTML>
<html>

<!--Contact Us-->
<head>
  <title>Fitness Guru - Contact Us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/contactus.css" />
    <link rel="stylesheet" type="text/css" href="style/footer.css" />

</head>

<body>

<div id="main"></div>
<!--Header-->
     <div id="header">
      <div id="logo">
        <div id="logo_text">
              <link rel="icon" type="image/png" href="img/fgl1ogo.jpg"/>
          <h1>Fitness Guru</h1>
          <h2>We believe in transforming physique</h2>
        </div>
    <ul id="menu">
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <li class="selected"><a href="index.php"><b>Home</b></a></li>
      <li><a href="aboutus.php"><b>About Us</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
      <?php
if(isset($_SESSION['username']))
{
?>
      <li><a href="account.php"><b>My Account</b></a></li>
	  	  <li><a href="book.php"><b>Book A Class</b></a></li>
<li><a href="logout.php"><b>Logout</b></a></li>

<?php
}
else
{
?>
<li><a href="signup1.php"><b>Join Today</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>
<?php
}
?>
    </ul>
  </div>
</div>

<!--Content -->
    <div id="content_header"></div>
    <div id="site_content">


<!--Page Content-->
 <div class='slider'>
  <img src="img/yoga.jpg" width="720" height="400"> </div>
      <div class="box">
 <div class="content_item">

        <!-- insert the page content here -->
<h7 align="center"><u><b>Change password</b></u></h7>
        <h2 align="center">Please enter the fields below to change your password</h2>
              <?php if(!empty($error_message)) { ?>
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
         <form action="change.php" method="post">

          <h3><strong>Current Password</strong></h3><br>
            <input name="oldpw" type="password" required class="fullname"><br><br>

             <h3><strong>Update Password</strong></h3><br>
            <input name="newpw" type="password" required class="fullname"><br><br>

        <input name="submit" type="submit" class="button" value="Update password">
        </form>

      </div>
</div>
</div>

<!--Footer-->
	<?php
	include "footer.php";
	 ?>

</body>
</html>
</html>
