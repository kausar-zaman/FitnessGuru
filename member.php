<!DOCTYPE HTML>
<!-- Credit for template: www.html5templates.com -->
<html>
<head>
<title>Fitness Guru - Home</title>
<meta name="description" content="website description" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
<div id="main"></div>
<div id="header">
  <div id="logo">
    <div id="logo_text">
      <h1>Fitness Guru</h1>
      <h2>We believe in transforming physique</h2>
    </div>
    <ul id="menu">
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <li class="selected"><a href="index.php"><b>Home</b></a></li>
	  <li><a href="book.php"><b>book</b></a></li>
      <li><a href="aboutus.php"><b>About Us</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
      <li><a href="signup1.php"><b>Join Today</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>
    </ul>
  </div>
</div>
<div id="content_header"></div>
<div id="site_content">
  <div class='slider'>
<img src="img/gym6.jpeg" width="720" height="400">

  </div>
  <br>
  <div id="sidebar_container">
    <div class="sidebar">
      <div class="sidebar_top"></div>
      <div class="sidebar_item">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>February 1st, 2014</h5>
        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br />
          <a href="#">Read more</a></p>
      </div>
      <div class="sidebar_base"></div>
    </div>
    <div class="sidebar">
      <div class="sidebar_top"></div>
      <div class="sidebar_item">
        <h3>Follow us on Social Media</h3>
        <ul>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">YouTube</a></li>
          <li><a href="#">Snapchat</a></li>
        </ul>
      </div>
      <div class="sidebar_base"></div>
    </div>
    <div class="sidebar">
      <div class="sidebar_top"></div>
      <div class="sidebar_item">
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; " src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div class="sidebar_base"></div>
    </div>
  </div>
  <div id="content">
    <!-- insert the page content here -->
    <h1>Welcome to the Fitness Guru</h1>
    <h2>A top class gym at a low cost price</h2>
    <p><strong>Fitness Guru is created to encourage people of all types getting in better shape and have a healthy lifestyle. Our gym offers fitness class facilities at a fraction of the usual cost of health club   membership, by removing the unnecessary frills.</strong></p>
    <p>Our state of the art gyms provide you with a great place to work out   in, whether you are there to burn off some calories or are training for   something more specific.</p>
    <p>Why not&nbsp;visit your nearest Simply Gym and take a look? We&rsquo;re here to help!</p>
    <a href="signup1.php">
    <button class="button1">JOIN NOW</button>
    </a> </div>
</div>
<!--Footer-->
	<?php
	include "footer.php";
	 ?>

</body>
</html>
</html>
