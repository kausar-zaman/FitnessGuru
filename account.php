<?php
/* Include database connection file */

require_once("inc/connect.php");

/* Starting Session */
session_start();



/*Variables */
$username = $_SESSION['username'];
  $abc = "SELECT membership, signupdate FROM users WHERE username='$username';";
$res = mysqli_query($conn, $abc);
$data = mysqli_fetch_assoc($res);

$exp_date = "2018-05-28";

// $abc = "SELECT signupdate FROM users where username='george.test'";

$today_date = $data['signupdate'];

// Convert to  strtotime

$exp = strtotime($exp_date);
$td = strtotime($today_date);




?>





<!DOCTYPE HTML>
<!-- Credit for template: www.html5templates.com -->
<html>
<head>
<title>Fitness Guru - My Account</title>
<link rel="stylesheet" type="text/css" href="style/account.css"/>
<link rel="stylesheet" type="text/css" href="style/footer.css"/>
<link rel="stylesheet" type="text/css" href="style/accountTable.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/kangshen.js"></script>
<script src="js/function.js"></script>
<script src="js/cancel.js"></script>
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
          <li><a href="book.php"><b>Book A Class</b></a></li>
          <li><a href="logout.php"><b>Logout</b></a></li>

        </ul>
    </div>
</div>
<p>&nbsp;</p>
<div id="site_content">
<br>
<div class="slider">

<!-- Credit for slideshow: https://www.comslider.com/ -->
<div id="comslider_in_point_1569836"></div>
<script type="text/javascript">
var oCOMScript1569836=document.createElement('script');
oCOMScript1569836.src="https://commondatastorage.googleapis.com/comslider/target/users/1524708094x836e3b9b3ffcc96db85507090e3b78d6/comslider.js?timestamp=1524711020&ct="+Date.now();
oCOMScript1569836.type='text/javascript';
document.getElementsByTagName("head").item(0).appendChild(oCOMScript1569836);
</script>
</div>
</div>



 </div>
<div class="content_item">
 <u><b id="welcome">Welcome,<i><?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?></i></b></u><br>
 <p>Your have been a member with us since: <?php echo $data['signupdate']; ?></p>
<p>Your membership type is <?php echo $data['membership']; ?></p>
<p id="expiry"><?php if($td>$exp)
{
	$diff=$td-$exp;
	$x=abs(floor($diff / (60 * 60 * 24)));
	echo "Membership expired".$x;

}
else {

	$diff=$td-$exp;
	$x=abs(floor($diff / (60 * 60 * 24)));
	echo "Membership days remaining: ".$x;
}
?>
</p>
<p>
<button class="button1" onClick="Renew()" name"renew">Renew now </button><br>
<?php

if(isset($_POST['renew']))

{
$date = strtotime("+7 day", $exp_date);
echo date('M d, Y', $date);
}
?>
</div>

        <script>
function Renew() {
	 var person = prompt("To renew your monthly membership please enter your credit card number\nCard number to renew: 4444555512344321");
	 Check = /^(?:4444555512344321?)$/;
	 if(!person.match(Check)) {
         alert("Error: Invalid credit card code! Please try again ");
      return false;  } else {

	alert("Your membership has been renewed! ");
    document.getElementById("expiry").value = "£11.19";
	return true;
}
}
        </script>



    <div class="column2">
        <h2><u><b>Your booked classes</b></u></h2>

        <h1>To view what classes we offer in our gym, <a href="calendar.php">click here</a> to view our calendar.</h1>
 <h1>To book a class with a person trainer, click on <a href="book.php">Book a class</a>.</h1>
 <br><br>
 <h7>To cancel your class, click on the cancel button on the class you have booked.</h7>

 <br><br>
        <table id="customers">

            <tr>
                <th width="2%">ID</th>
                <th width="25%">Class</th>
                <th width="25%">Trainer</th>
                <th width="17%">Date</th>
                <th width="17%">Time</th>
                <th width="14%">Status</th>
            </tr>
            <?php
            $sql = "SELECT class, trainer, date, time, bookingID FROM booking WHERE username ='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <form action='account.php' method='post'>
                        <tr>
                            <td><?php echo $row['bookingID']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td><?php echo $row['trainer']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                                	  <td><input name="Cancel" type="button" class="button1" onClick="unsub(<?php echo $row['bookingID']; ?>)" value="Cancel"><br>

</td>
                        </tr>


<script>
 function unsub(delid)
 {
 if(confirm("Are you sure you want to cancel your class?")){

 alert("You have cancelled your class");
 window.location.href='delete.php?id=' +delid+'';
 return true;
 }
 }
 </script>
                    <?php echo "</tr>";
                }
                echo "</table>"; ?>
                    </form>;
                <?php
            }
            ?>
        </table>
    </div>



        <div class="column">
        <h1 align="center"><u><b>Manage your account</b></u></h1>
        <li class="button1"><a href="change.php"><b>Change your password</b></a></li>
        <li class="button1"><a href="deletepage.php"><b>Delete your account</b></a></li>
    </div>
</div>


<!--Footer-->
	<?php
	include "footer.php";
	 ?>

</body>
</html>
</html>
