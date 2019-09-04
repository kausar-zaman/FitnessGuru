<?php

/* Include database connection file */

		require_once("inc/connection.inc.php");
		$db_handle = new connection();

/* Starting Session */
session_start();

$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'fitnessguruhq@gmail.com';
            $emailSubject = 'Enquiry submitted by '.$name;
            $htmlContent = '<h2>Fitness Guru</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
				<h4>Enquiry</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg =  '<h2>Your message has been sent. One of our members will be in touch with your shortly.</h2>';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = ' <h2>Your message has not been sent. Please try again.</h2>';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>


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
  <h3><u><b>Our facilities are open 24/7!</b></u></h3></div>
  <div id="content">
  </div>
 <div class="map">
  <div id="header1">

<!-- Enquiry Form for visitors-->
<h3><img src="img/fglogo.jpg" width="177" height="106"></h3>
<h3><u><b>Address</b></u>
</h3>
<h2>Fitness Guru Gym <br>
Sports Central <br>
Northumbria University <br>
Northumberland Road <br>
Newcastle Upon Tyne<br>
United Kingdom<br>
NE1 8QD<br></h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9158.832574740854!2d-1.6065651!3d54.9782172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75bb7bbea85ee03f!2sSport+Central!5e0!3m2!1sen!2suk!4v1524706367444" frameborder="0" style="border:1px solid; height:500px;width:500px;" allowfullscreen></iframe>
<br>
  <h3><u><b>Get in touch with us </b></u></h3>
  <h2>Please complete the form below if you have any questions about our gym and we will get back to as soon as we can.</h2>
  </div>
  <div id="content">
    <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
    <form action="" method="post">
    <br>
        <h4>Name</h4>
        <input name="name" type="text" required class="fullname" placeholder="Your Name">
        <br>
        <h4>Email </h4>
        <input name="email" type="email" required class="fullname" placeholder="email@example.com">
        <br>
        <h4>Subject</h4>
        <select name="subject" class="subject">
         <option value="Payment" >Payment</option>
          <option value="Classes">Classes</option>
           <option value="Trainers">Trainers</option>
           <option value="General">General</option>
      </select>
        <br>
        <h4>Message</h4>
        <input name="message" type="text" required="required" class="message" placeholder="Write your message here" value=" ">
        <br><br>
        <input name="submit" type="submit" class="button" value="Send Email">
        <div class="clear"> </div>
    </form>


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
