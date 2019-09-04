<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>


			* {
			  margin:0;
			  padding:0;
			  font-family: Arial, Helvetica, sans-serif;
			}

			/* Create three unequal columnzs that floats next to each other */
			.columnz {
			  float: left;
			  padding: 10px;
			  height: 275px;
			  color:white;
			  background-color: #1a1a1a;
			  line-height: 1.6;
			  box-sizing: border-box;
			}

			.columnz img {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}

			.columnz h1{
			  text-align: center;
			  font-size: 20px;
			  font-weight: bold;
			  color:white;
			}

			.columnz p{
			  text-align: center;
			  font-size: 16px;
			  margin: 0;
			  line-height: 1.6;
			}

			.leftz, .rightz {
			  width: 33%;
			}

			.middlez {
			  width: 34%;
			}

			/* Clear floats after the columnzs */
			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}
		</style>
	</head>
	<body>
	<!--- Footer -->
	  <div class="columnz leftz">
		<h1><u>Follow us on Social Media</u></h1>
		<img src="img/facebook.png" width="40px" height="40px"><p style="padding-bottom:0px;">Facebook</p>
		<img src="img/tweet.png" width="40px" height="40px" style="border-radius: 50%;"><p style="padding-bottom:0px;">Twitter</p>
		<img src="img/instagram.png" width="40px" height="40px" style="border-radius: 50%;"><p style="padding-bottom:0px;">Instagram</p>
	  </div>
	  <div class="columnz middlez">
		<h1><u>Contact Us</u></h1>
		<p style="line-height: 1.6;"> Fitness Guru Gym <br>
			Sports Central <br>
			Northumbria University <br>
			Northumberland Road <br>
			Newcastle Upon Tyne <br>
			United Kingdom <br>
			NE1 8QD
		  </p>
	  </div>
	  <div class="columnz rightz" style="text-align:center; padding:50px;">
		<img src="img/fglogo.jpg">
		<p>Copyright &copy; 2019 Fitness Guru Inc. </p>
	  </div>

	</body>

</html>
