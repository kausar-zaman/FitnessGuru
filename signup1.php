<?php

$date = date('d/m/y');

if(!empty($_POST["register_btn"])) {
/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "Please complete all the fields!";
		break;
		}
	}
/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){
	$error_message = 'Password do not match!<br>';
	}

/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "You must accept Terms and Conditions to Register.";
		}
	}

/* Connect to the database */
	if(!isset($error_message)) {
		require_once("inc/connection.inc.php");
		$db_handle = new connection();

/* Adding users to the database */

		$query = "INSERT INTO users (username, first_name, last_name, password, email, membership, signupdate) VALUES
		('" . $_POST["username"] . "', '" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["email"] . "', '" . $_POST["membership"] . "', '" . $_POST["signupdate"] . "')";
		$result = $db_handle->insertQuery($query);



		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";
			session_start();
			header("Location: studentpay.php");
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";
		}
	}
}
?>



<!DOCTYPE HTML>
<html>
<!--Header-->
<head>
  <title>Fitness Guru - Sign Up</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/signup.css" />
  <link rel="stylesheet" type="text/css" href="style/footer.css"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

     <div id="header">
      <div id="logo">
        <div id="logo_text">
           <link rel="icon" type="image/png" href="img/fgl1ogo.jpg"/>

          <h1>Fitness Guru</h1>
          <h2>We believe in transforming physique</h2>
        </div>
    <ul id="menu">
    <!--Links-->
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <li class="selected"><a href="index.php"><b>Home</b></a></li>
      <li><a href="aboutus.php"><b>About Us</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
<li><a href="signup1.php"><b>Join Today</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>
    </ul>
      </div>
    </div>
<div id="site_content">


  <!--Page Content-->
  <div id="content">

  <div class='slider'>


<div id="comslider_in_point_1569581"></div>
<script type="text/javascript">
var oCOMScript1569581=document.createElement('script');oCOMScript1569581.src="https://commondatastorage.googleapis.com/comslider/target/users/1524681763x1e0f572bf8dadfd64b25b63b86044f96/comslider.js?timestamp=1524682019&ct="+Date.now();oCOMScript1569581.type='text/javascript';document.getElementsByTagName("head").item(0).appendChild(oCOMScript1569581);
</script>



</div>

  <div class="box">
<h1><b><u>Sign up with Fitness Guru</u></b></h1>



<div class="login"> <br />

<!--Registration Form-->

<form id="register" name="register" method="post" action="signup1.php">
<?php if(!empty($success_message)) { ?>
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>


    <h3><b><u>First Name</u></b></h3>
  <div class="input"><input type="text" name="first_name"  value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" tabindex="1" /></div>
  <br />
  <h3><b><u>Last Name</u></b></h3>
  <div class="input"><input type="text" name="last_name"  value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" tabindex="2" /></div>
  <br />
  <h3><b><u>Username</u></b></h3>
  <div class="input"><input type="text" name="username"  value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" tabindex="3" /></div>
  <br />
    <h3><b><u>Email Address</u></b></h3>
  <div class="input"><input type="text" name="email"  value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" tabindex="4" /></div>
  <br />
  <h3><b><u>Membership Type</u></b></h3>
  <div class="input"><input type="text" name="membership"  value="Student"/></div>
  <br />
  <p> Kindly use storng password as as a combination of letters and numbers </p>
  <div class="input"><input type="text" name="signupdate" value="<?php echo $date;?>" tabindex="5" /></textarea></div>
<h3><b><u>Password</u></b></h3>
  <div class="input"><input type="password" name="password"  value="" tabindex="5" /></textarea></div>
  <br />
<h3><b><u>Confirm Password</u></b></h3>
  <div class="input"><input type="password" name="confirm_password" value="" tabindex="5" /></textarea></div>
<br />
    <input type="checkbox" name="terms"> <h7> I accept Terms and Conditions. </h7>
    <br />
      <br />
  <div class="input">
    <input name="reset" type="reset" class="reset" tabindex="6"  value="Reset" />
	<input name="register_btn" type="submit" class="register_btn" tabindex="7" value="Submit" />

  </div>
</form>
    </div>


<!--Redirect to login page-->
<div class="login-help">
<p>Already have an account? <a href="login.php">Click here to log in</a>.</p>
</div>
</div>
</div>
</div>

<!--Footer-->
<!--Footer-->
	<?php
	include "footer.php";
	 ?>

</body>
</html>
</html>
