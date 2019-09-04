<?php

/* Include database connection file */

		require_once("inc/connect.php");


/* Starting Session */
session_start();



 if(isset($_POST['submit']))
 {

$username = $_SESSION['username'];

/* sql to delete a record */
$sql="DELETE FROM `users` WHERE `username`='".$_SESSION["username"]."'";

   $result = mysqli_query($conn, $sql);

    if($result)
    {
 header('Location:logout.php');
    }else{
        echo 'Data Not Deleted';
		 header('Location:account.php');
    }
    mysqli_close($conn);
}

?>



<!DOCTYPE HTML>
<html>

<head>

  <title>Fitness Guru - About Us</title>
  <meta name="description" content="website description" />
  <link rel="stylesheet" type="text/css" href="style/contactus.css" />
     <link rel="stylesheet" type="text/css" href="style/footer.css">
</head>

<body>
<div id="header">
  <div id="logo">
    <div id="logo_text">
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
    <div id="content_header"></div>
<div id="site_content">


<!--Page Content-->


 <div class='slider'>
  <img src="img/gym6.jpeg" width="720" height="400"> </div>
      <div class="box">
 <div class="content_item">


<div id="header1">
      <!-- insert the page content here -->
        <h7><b><u>Delete your account</u></b></h7>
      <h1>Are you sure you want to delete your account?</h1>
        <h1>We will be sad to see you go.</h1>
        </div>
         <form action="deletepage.php" method="post">

           <h3><strong>Enter your username</strong></h3><br>
            <input name="username" type="text" required class="fullname"><br><br>

        <input name="submit" type="submit" class="button" value="Delete" onclick="del()">
        </form>

        <script>
function del() {
	if (confirm("Are you sure you want to delete your account?")) {
		alert("Your account has been deleted. Thank you for choosing Fitness Guru.");
} else {
	alert("You have not deleted your account. You will be redirected to your account page.");
	window.location.href = "http://unn-w17022892.newnumyspace.co.uk/FitnessGuru/account.php";
}}
</script>

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
