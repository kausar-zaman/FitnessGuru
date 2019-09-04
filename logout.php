<?php
// Session start
session_start();
// Include database connection file
include_once('inc/connection.inc.php');
session_destroy();
unset($_SESSION['id']);

echo("<script>window.location = 'index.php';</script>");
 echo("<script>alert('You have logged out.')</script>");
 exit;
?>