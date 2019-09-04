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
	<!--Header-->
<head>
	<title>Fitness Guru - Home</title>
	<meta name="description" content="website description" />
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<link rel="stylesheet" type="text/css" href="style/index.css" />
</head>
<!--Links to pages -->
<body>
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
	<div id="site_content">
	  <div id="slider1">
		<img src="img/indexpic.jpg" width="100%" height="800" class="slider1" style="margin-bottom: 0px;">
			<div class="centered">

				  <h1>MAKE IT A LIFESTYLE,
				  <br/>NOT A DUTY</h1>
						<?php
						if(isset($_SESSION['username']))
						{
						?>
					<a href="account.php">
					<button class="button1"><strong>VIEW YOUR ACCOUNT</strong></button>

						<?php
						}
						else
						{
						?>
						  <a href="plan.php">
						  <button class="button1"><strong>JOIN TODAY</strong></button>
						  <?php
						}
						?>
						</a>
			</div>
		</div>


<!--Columns-->
		<div class="row">
		  <div class="column"">
			<h2>BOXING</h2>
			<img src="img/boxing.png" width="100" height="100">
		<p>Take our boxing class to stay in shape develop discipline, agility and coordination.</p>
		  </div>
		  <div class="column">
			<h2>WEIGHT TRAINING</h2>
			<img src="img/weight.png" width="100" height="100">
			<p>Build your muscles by taking our weight training classes.</p>
		  </div>
		  <div class="column">
			<h2>CARDIO</h2>
				<img src="img/running.png" width="100" height="100">
			<p>Learn to stay lean by doing activities such running and cycling in our cardio lessons.</p>
		  </div>
		  <div class="column">
			<h2>YOGA</h2>
				<img src="img/yoga.png" width="100" height="100">
			<p>Our yoga classes ensures you will stay calm and <br>relax your mind by learning to strengthen <br>your body and mind.</p>
		  </div>
			<div class="column2">
			<h2>OPEN 24/7</h2>
			<img src="img/open.png" width="128" height="128">
			<p>Our gym facilities are open 24 hours, 7 days so you are welcome to come to our gym at any time.</p>
		  </div>  <div class="column2">
			<h2>BLOGS</h2>
			<img src="img/blog.png" width="128" height="128">
			<p>Read our  blogs on how Fitness Guru members transformed their body using our facilities and tips on how to stay in shape courtesy of our trainers.</p>
		  </div>
		</div>
	</div>




<!--Footer-->
	<?php
	include "footer.php";
	 ?>

</body>
</html>

