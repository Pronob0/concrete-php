<?php
session_start();
require 'includes/db.php';
$username=$_POST['username'];
$password=$_POST['password'];
$username= stripcslashes($username);
$password= stripcslashes($password);

$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);
		$password=md5($password);
        $salt="a1Bz20ydqelm8m1wql";
        $password=$salt.$password;

        $query=mysqli_query($con,"SELECT * FROM `users` WHERE username='$username' AND password='$password'");
        $res=mysqli_fetch_array($query);

        if ($res['username']==$username && $res['password']==$password) {

        	$_SESSION['id']=$res['user_id'];

        	header("refresh:2; url=index.php");
        	# code...
        }
        else{
        	echo "Login failed";
        }



?>