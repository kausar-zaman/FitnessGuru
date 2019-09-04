<?php

include 'inc/connect.php';

$query = "delete from booking where bookingID=$_GET[id]";
$rs = mysql_query ($query);
if($rs){
  header('Location: index.php');
}

?>