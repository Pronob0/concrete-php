<?php  
session_start();
if (empty($_SESSION['adminEmail'])) {
	echo "<script> alert('Please login first') </script>";
	echo "<script> location = 'login.php' </script>";
}
?>