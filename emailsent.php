<?php

/* Include database connection file */

		require_once("inc/connection.inc.php");
		$db_handle = new connection();

/* Starting Session */
session_start();

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
  <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
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
      <div class="box">
<div id="header1">
<p>
<h7><u><b>Contact Us</b></u></h7>
  <h3><u><b>We are open 24/7!</b></u></h3>
  <h2>Your message has been sent. One of our members will be in touch with your shortly.</h2>
  <h3><img src="img/fglogo.jpg" width="177" height="106"></h3>
</div>
  <div id="content"></div>
 <div class="map">
  <div id="header1">

<!-- Enquiry Form for visitors-->
  <h3><u><b>Get in touch with us </b></u></h3>
  <h2>Please complete the form below if you have any questions about our gym and we will get back to as soon as we can.</h2>
  </div>
  <div id="content">
<form method="post" name="contactform" action="email.php">

		<h3><strong>Name</strong><br>
		<input name="name" type="text" class="fullname">
	</h3>
		<h3><strong>Email</strong><br>
		<input name="email" type="text" class="fullname">
	</h3>
	<h3><strong>Message</strong><br>
		<textarea name="message" class="message" maxlength="1000"></textarea>
	</h3>
	<input name='submit' type="submit" class="button" value="Send">
</form>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("myemailform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email","Please enter a valid email address");
frmvalidator.addValidation("message","req","Please write your message");
</script>

    </div>
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
