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
  <title>Fitness Guru - About Us</title>
  <meta name="description" content="website description" />
      <link rel="stylesheet" type="text/css" href="style/aboutus.css" />
    <link rel="stylesheet" type="text/css" href="style/footer.css" />

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
<li><a href="plan.php"><b>Join Today</b></a></li>
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
<div class="slider">
<!-- Credit for slideshow: https://www.comslider.com/ -->
<div id="comslider_in_point_1569836"></div>
<script type="text/javascript">
var oCOMScript1569836=document.createElement('script');oCOMScript1569836.src="https://commondatastorage.googleapis.com/comslider/target/users/1524708094x836e3b9b3ffcc96db85507090e3b78d6/comslider.js?timestamp=1524711020&ct="+Date.now();oCOMScript1569836.type='text/javascript';document.getElementsByTagName("head").item(0).appendChild(oCOMScript1569836);
</script>
</div>
      <div class="box">
      <div id="header1">
      <br>
        <h7>
          OUR MISSION<br>
          <br>
          <b> Believe in transforming your physique</b>
          <br>
          <br>
          <img src="img/fglogo.jpg" width="250" height="149">
<p><u><b>What does Fitness Guru offer?</b></u></p>
        </h7>
        <blockquote>
          <h2>Fitness Guru is Newcastle's biggest owned Fitness Club, a 24000 sq ft superclub.exclusive Fitness equipments and service at budget prices with 24/7 access.</h2>
                <h2>We continually re-invest our profits with over &#163;150,000 of recent new investment.  There are more than 250 pieces of state-of-the-art equipment, mostly supplied by Life Fitness which is recognised as the leading manufacturer of fitness equipment in the world.</h2>
                <h2>The fitness areas are open, spacious and blessed with generous levels of natural light. There are no turnstiles or barriers; instead you are greeted by friendly reception and gym staff at all times.</h2>
                <h2>The service and equipment are Premium Class, only the price is budget.Memberships contain unlimited use of the gyms, classes and saunas for only &#163;15.99 a month, there is no contract and no catch meaning you can cancel at any time.</h2>
                <h2>To view what we have available in our facilities please create an account for our website for free.</h2>
        </blockquote>
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
