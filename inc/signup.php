<?php
session_start();

// Include database connection file
include('inc/connection.inc.php');


// Check to see if the form has been submitted
if (!empty($_POST['register_btn']))
{
	// Check to see all fields have been completed
if ($_POST['email'] == "") {
	$error_msg = 'Please enter email.';
} else if ($_POST['password'] == "") {
	$error_msg = 'Please enter password.';
} else if ($_POST['first_name'] == "") {
	$error_msg = 'Please enter your first name.';
} else if ($_POST['last_name'] == "") {
	$error_msg = 'Please enter last name.';
} else {
	
	$id = Register($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
$_SESSION['id'] = $id;
header("Location: login.php"); 
}
}
?>


<!DOCTYPE HTML>
<html>

<head>
  <title>Fitness Guru - Login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/signup.css" />
</head>

<body>
  <div id="main"></div>
     <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Fitness Guru</h1>
          <h2>We believe in transforming physique</h2>
        </div>
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html"><b>Home</b></a></li>
		  <li><a href="book.html"><b>book</b></a></li>
          <li><a href="aboutus.html"><b>About Us</b></a></li>
          <li><a href="contactus.html"><b>Contact Us</b></a></li>
          <li><a href="signup.html"><b>Join Today</b></a></li>
          <li><a href="login.html"><b>Login</b></a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
    

<!--Page Content-->
<div id="content">
<div class="login">
<h7><u><b>Sign up with Fitness Guru</b></u>
</h7>

<!-- Registration Form -->
<form method="post" action="signup.php">
<h3>First Name</h3>
<p><input type="text" name="first_name" class="textInput"></p>
<h3>Last Name</h3>
<p><input type="text" name="last_name" class="textInput"></p>
<h3>Email address</h3>
<p><input type="text" name="email" class="textInput"></p>
<h3>Password</h3>
<p><input type="password" name="password" class="textInput"></p>
<input type="button" name="register_btn" value="Register">
      </form>
    </div>

<!--Redirect to login page-->
<div class="login-help">
<p>Already have an account? <a href="login.php">Click here to log in</a>.</p>
</div>
</div>
</div>
    
<!--Footer-->
<div id="content_footer"></div>
<div id="footer">
<p>Copyright &copy; 2018 Northumbria University </p>
</div>
</body>
</html>
