
<?php
/* Include database connection file */

		require_once("inc/connect.php");


/* Starting Session */
session_start();


//Email form
//Credit http://form.guide/
if(isset($_POST['submit']))
{
$price = $_POST['price'];
$visitor_email = $_POST['email'];


$email_from = 'fitness.guru.hq@gmail.com';//<== update the email address
$email_subject = "Fitness Guru - Personal Class confirmation";
$email_body = "Thank you for choosing Fitness Guru\n".
    "We can confirm that you have have booked with one of your personal trainers at our gym.\n".
	"Total: $price .\n".
	"\n".
	"Now you can login to your account of Fitness Guru using the link below .\n".
	"http://unn-w17022892.newnumyspace.co.uk/FitnessGuru/login.php .\n".

$to = $_POST['email'];//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: payconfirm.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
}


?>

<!DOCTYPE HTML>
<html>

<head>

  <title>Fitness Guru - Pay</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
     <link rel="stylesheet" type="text/css" href="style/pay.css">
        <link rel="stylesheet" type="text/css" href="style/footer.css">
          <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="js/pay.js"></script>
</head>

<div id="header">
  <div id="logo">
      <div id="logo_text">
              <link rel="icon" type="image/png" href="img/fgl1ogo.jpg"/>
      <h1>Fitness Guru</h1>
      <h2>We believe in transforming physique</h2>
    </div>
    <ul id="menu">
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <li class="selected"><a href="index.php"><b>Home</b></a></li>
      <li><a href="aboutus.php"><b>About Us</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
      <?php
if(isset($_SESSION['username']))
{
?>
      <li><a href="account.php"><b>My Account</b></a></li>
<li><a href="logout.php"><b>Logout</b></a></li>

<?php
}
else
{
?>
<li><a href="signup1.php"><b>Join Today</b></a></li>
	  <li><a href="book.php"><b>Book A Class</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>
<?php
}
?>
    </ul>
  </div>
</div>

<!--Content -->
<body onload='document.form1.text1.focus()'>
<div id="site_content"></div>
<br><br>

<div class="content_item">
<img src="img/gym7.jpg" width="720" height="400"> </div>

<div class="content_item">
      <h1><b><u> Payment confirmation</u></b></h1>

<h4>You have booked your class with one our personal trainers</h4>
<h4>An email has been sent confirming your class with your personal trainer</h4>
<h4><a href="account.php">Click here</a> to view your account and your classes.</h4>
<p><img src="img/fglogo.jpg" width="177" height="106"></p>
<p>Thank you for choosing Fitness Guru</p>


  </div>

    <br><br>
		<!--Footer-->
			<?php
			include "footer.php";
			 ?>

		</body>
		</html>
		</html>
