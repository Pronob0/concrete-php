<?php  

	$con = mysqli_connect('127.0.0.1','root','');

if (!$con) {
	echo "Not Connected";
}
if(!mysqli_select_db($con,'concrete')){
	echo "Database Not selected";
}

?>