
<?php 
 session_start(); 

 if (!isset($_SESSION['user'])) {
	 $_SESSION['message'] = "You must log in first";
 }
?>
