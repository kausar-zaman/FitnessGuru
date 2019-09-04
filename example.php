 <?php
$servername = "localhost";
$username = "unn_w17022892";
$password = "Kausar_10";
$dbname = "unn_w17022892";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


  $abc = "SELECT membership FROM users WHERE username='parvez.zaman';";
$res = mysqli_query($conn, $abc);
$data = mysqli_fetch_assoc($res);
echo "Result: " . $data['membership'];



?> 