<?php
/* Include database connection file */

		require_once("inc/connect.php");


/* Starting Session */
session_start();



/* Variable To Store Error Message */
$error_message = '';

if(isset($_POST['confirm_btn'])){


$class = $_POST['class'];
$trainer = $_POST['trainer'];
$date = $_POST['date'];
$time = $_POST['time'];
$username = $_POST['username'];


$sql = "INSERT INTO booking (class, trainer, date, time, username) VALUES ('$class', '$trainer', '$date', '$time', '$username')";

if (mysqli_query($conn, $sql)) {
    header ( 'Location: pay.php' );

} else {

	if(empty($class)){
   $error_message = "Please complete all fields!";
}
	if(empty($trainer)){
   $error_message = "Please complete all fields!";
}
	if(empty($date)){
   $error_message = "Please complete all fields!";
}
	if(empty($time)){
   $error_message = "Please complete all fields!";
}
}

}




?>


<!DOCTYPE HTML>
<html>

<head>
  <title>Fitness Guru - Individual Classes</title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/book.css" />
     <link rel="stylesheet" type="text/css" href="style/footer.css">
</head>

<body>
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
      <li><a href="account.php"><b>My Account</b></a></li>
      <li><a href="logout.php"><b>Logout</b></a></li>
    </ul>
  </div>
</div>

<!--Content -->
<div id="site_content"></div>

<div class="slider">
<img src="img/basketball.jpg" width="720" height="400"> </div>

<div class="content_item">
<div class="bookform">
    &nbsp;&nbsp;&nbsp;
<form id="book" name="book" method="post" action="book.php">
    <h1 align="center"><strong><u>Individual Classes</u></strong></h1>
  <h6 align="center"><strong><u>Book a session with us</u></strong></h6>
  <h6 align="center">Note: This booking form is for members only who want to hire a personal trainer for their individual goals</h6>
  <h6 align="center">These classes also cost &#163;20 per session</h6>
  <h6 align="center"> For group classes, <a href="calendar.php">click here to view our calendar.</a></h6>
<br>
<br>
<?php if(!empty($error_message)) { ?>
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>

<!-- class Picker-->
<div align="center" class="bookform">

			<input type="hidden" name="username" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>" readonly>


    <h1><strong>Class</strong></h1>
    &nbsp;&nbsp;&nbsp;
    </strong>
  <p><strong>
    <select name="class" class="subject">
      <option value="Yoga">Yoga</option>
      <option value="Boxing">Boxing</option>
      <option value="Weight training">Weight training</option>
      <option vlaue="Swimming">Swimming</option>
      <option vlaue="Baksetball">Basketball</option>
       <option vlaue="Cardio">Cardio</option>
        <option vlaue="MMA">MMA</option>
    </select>
  </strong><br>
    <!-- trainer picker-->
    <h1><strong>Trainer</strong></h1>
  </p>
  <p>
    <select name="trainer" class="subject">
      <option value="Vishal">Vishal</option>
      <option value="Ryan">Ryan</option>
      <option value="Anna">Anna</option>
      <option value="Danielle">Danielle</option>
    </select>
    <br>
<!-- date picker-->
 <h1><strong>
Select a Date </strong><br>
  <br></h1>
 <p>
  <input name="date" type="date" class="subject">

  </p>
  <script type="text/javascript" src="js/date.js"></script>

   <h1><strong>Select a time </strong></h1>
   &nbsp;&nbsp;&nbsp;

 </p>
 <p><strong>
   <select name="time" class="subject">
   <option disabled selected value> -- Select a time -- </option>
      <option value="9:00 - 11:00">9:00 - 11:00</option>
      <option value="11:00 - 13:00">11:00 - 13:00</option>
      <option value="13:00 - 15:00">13:00 - 15:00</option>
      <option value="15:00 - 17:00">15:00 - 17:00</option>
      <option value="17:00 - 19:00">17:00 - 19:00</option>
    </select>
</strong></p>
<!--buttons-->
</div>
<div align="center">
  <input name="confirm_btn" type="submit" class="button1" value="Confirm">
  &nbsp;&nbsp;
<input name="resetbtn" type="reset" class="button1" value="Reset">
</div>
</form>
<br>
<center>
</center>
</div>
</div>
</div>
<br>

<!--Footer-->
	<?php
	include "footer.php";
	 ?>

</body>
</html>
</html>
