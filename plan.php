<?php

/* Include database connection file */

		require_once("inc/connection.inc.php");
		$db_handle = new connection();

/* Starting Session */
session_start();

?>

<!DOCTYPE HTML>
<!-- Credit for template: www.html5templates.com -->
<html>
<head>

<!--Header-->
<title>Fitness Guru - Gym Plan</title>
<link rel="stylesheet" type="text/css" href="style/plan.css" />
<link rel="stylesheet" type="text/css" href="style/footer.css"/>
<style type="text/css">
#site_content .box p {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<!--Links to pages -->
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
<li><a href="account.php"><b>My Account </b></a></li>
<li><a href="logout.php"><b>Logout</b></a></li>

<?php
}
else
{
?>
<li><a href="plan.php"><b>Join Today</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>

<?php
}
?>
    </ul>
  </div>
</div>
<div id="content_header"></div>
 <div id="site_content">
 <div class="box"><img src="img/treadmills.jpg" width="100%" height="500">

   <div id="header1">
    <h1 align="center"> <strong><u>Choose your plan </u></strong></h1>
    </div>
    <img src="img/clip.jpg" width="500" height="174">
<h3 align="center"> <strong><u>Prices</u></strong></h3>
    <h2 align="center">Student - £12.99</h2>
    <h2 align="center">Senior - £10.99</h2>
    <h2 align="center">Standard - £15.99</h2>
       <h3 align="center"> We also do offer discounts to those who meet our following criteria listed below.    </h3>
     <div class="row">
       <br>
  <div class="column" style="background-color:#FFF">
    <h7><b>Student Pass</b></h7>
    <br>
    <p>If you attend college or university over 16 then you are eligible for the student plan, which offers 30% off to your membership.</p>
    <br>
    <a href="student-sign-up.php">
    <button class="button1" onclick="myFunction()">Pay Now</button>
    </a></div>
<div class="column" style="background-color:#FFF">
    <h7><b>Senior Pass</b></h7>
    <p>If you are over 60 who want to remain active by using our facilities then you are eligible for this plan which offers 30% off to your membership.</p>
    <br>
    <a href="senior-sign-up.php">
    <button class="button1" onclick="myFunction1()">Pay Now</button>
    </a></div>
<div class="column" style="background-color:#FFF">
    <h7><b>Standard Pass</b></h7>
        <p>If you don't meet the two criteria of the other plans then this plan is the most suitable for you. We also 30% off to your membership.</p>
        <br>

    <a href="standard-sign-up.php">
    <button class="button1" onclick="myFunction2()">Pay Now</button>
    </a></div>
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
