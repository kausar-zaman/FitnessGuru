<?php
/* Include database connection file */

		require_once("inc/connect.php");


/* Starting Session */
session_start();

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
      <li><a href="#"><b>My Account</b></a></li>
<li><a href="logout.php"><b>Logout</b></a></li>

<?php
}
else
{
?>
<li><a href="plan.php"><b>Join Today</b></a></li>
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
      <h1><strong> Pay for your membership</strong></h1>
      <p><strong>Accepted cards and gateway</strong></p>
      <p><img src="img/visa.jpg" width="100" height="35"><img src="img/mastercard.jpg" width="80" height="40"><img src="img/paypal.png" width="160" height="40"></p>

<form id="myform" onsubmit="return checkcrd(this);"  method="post" action="thankyou.php">
<p>Price</p>
 <input type="text" name="price" id="price" value="&#163;10.99" readonly>
 <br><br>
       Apply senior discount code (up to 30% off)<br>
      <br>
      CODE: SEN456
      <br>
      <button onclick="myFunction()" class="button">
      <p class="btn">Click here</p>
      </button>


<script>
function myFunction() {
	 var person = prompt("Enter your senior discount code");
	 Check = /^(?:SEN456?)$/;
	 if(!person.match(Check)) {
         alert("Error: Invalid senior discount code! Please try again ");
		 document.getElementById("price").value = "Try again";
      return false;  } else {

	alert("Your senior code has been validated! ");
    document.getElementById("price").value = "£7.69";
	return true;
}
}
</script>
<p>Membership Type</p>
 <input type="text" name="membership" value="Senior membership" readonly>
  <br>
<p>Email</p>
 <input type="text" name="email" id="email">
 <br>
                      <p>Card Number</p>
 <input type="text" name="cardnum" id="cardnum">
 <br>
                        <p>CVC</p>
  <input type="text" name="cvc" id="cvc">
   <br>
                    <p>Expiration Month</p>
   <input type="text" name="expirymonth" id="expirymonth">
    <br>
                        <p>Expiration Year</p>
     <input type="text" name="expiryyear" id="expiryyear">
      <br>
          <br>
 <input type="submit" class="button1" name="submit" id="submit" value="Pay Now">

  </form>
  <br><br><br>

  <div class="dummy">
  <h1>Please enter the following values to enable pay validation</h1>
  <table>
  <tr>
    <th width="25%">Card number</th>
    <th width="25%">CVC</th>
   <th width="25%">Expiry Month</th>
   <th wdith="25%">Expiry Year</th>

  </tr>
  <tr>
    <td>4512340987256</td>
    <td>401</td>
      <td>07</td>
       <td>22</td>

  </tr>
</table>




      </div>
    </div>
    </div>
    <br><br>
		<!--Footer-->
			<?php
			include "footer.php";
			 ?>

		</body>
		</html>
		</html>
