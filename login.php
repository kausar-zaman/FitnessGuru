 <?php
 /* Create a connection with session database in MYSQLi */

require_once ("inc/connect.php");

/* Variable To Store Error Message */
$error_message = '';



 //check the user or check if the form has submitted or not
 if(isset($_POST['submit']))
 {
  /* Defining variables */
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
   $password = md5($password);



/* Query for selecting records which matches the entered username and password field of register table */
  $sql="SELECT * from users where username='".$username."' AND password='".$password."'";

/* run the above query using mysqli_query() */
  $run_query=mysqli_query($conn,$sql);
  /* check user */
  if((mysqli_num_rows($run_query))>0)
  {
  /* Starting a session after login */
  session_start();

 /*store the username in SESSION global variable */
  $_SESSION['username']=$username;

 $session=$_SESSION['username'];

 /* Redirect to member page */
  header('Location:account.php');
  }
  else

/* Display error message */
  $error_message = "Invalid username or password";

}

?>

<!DOCTYPE HTML>
<html>

<!--Header-->

<head>
  <title>Fitness Guru - Member Login</title>
  <link rel="stylesheet" type="text/css" href="style/footer.css" />
  <link rel="stylesheet" type="text/css" href="style/login.css" />
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

<!-- Links -->
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <li class="selected"><a href="index.php"><b>Home</b></a></li>
      <li><a href="aboutus.php"><b>About Us</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
<li><a href="plan.php"><b>Join Today</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>
    </ul>
      </div>
    </div>
<div id="site_content">

<!--Page Content-->

<div class='slider'>


<div id="comslider_in_point_1569581"></div>
<script type="text/javascript">
var oCOMScript1569581=document.createElement('script');oCOMScript1569581.src="https://commondatastorage.googleapis.com/comslider/target/users/1524681763x1e0f572bf8dadfd64b25b63b86044f96/comslider.js?timestamp=1524682019&ct="+Date.now();oCOMScript1569581.type='text/javascript';document.getElementsByTagName("head").item(0).appendChild(oCOMScript1569581);
</script>



</div>
    <div class="login">
    <br>
      <h7>
      <div class="box">


        <h1 align="center"><u><b>Login to Fitness Guru</b></u></h1>

      <?php if(!empty($error_message)) { ?>
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<form method="post" action="login.php">

<!--Login Form-->

		<div class="input-group">
	      <h2 align="left"><strong><u>Username</u></strong></h2>
			<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
	  </h2>
	  </div>
        <br>
		<div class="input-group">
			<h2 align="left"><strong><u>Password</u></strong></h2>
			<input type="password" name="password">
		</h2>
		</div>
        <br>
		<div class="input-group">
		  <button type="submit" class="btn" name="submit">Login</button>

        <br>
        <br>
			<p>Not yet a member? <a href="plan.php">Sign up</a><br/>



      </p>
	  </p>
		  <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div></form>
  </section>


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
