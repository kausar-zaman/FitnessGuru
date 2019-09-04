 <?php 
 include_once('inc/connect.php');
 $id=$_GET['id'];
 $query="delete from booking where bookingID='$id'";
 $del=mysqli_query($conn,$query);
 if($del)
 {
	 header('Location: account.php');
     echo"record has been deleted";   
 }
 else
 {
     die("Record is not deleted it is query error.".mysqli_error());  
 }
 ?>