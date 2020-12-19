<?php
    session_start();
    require 'includes/db.php';

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location: admin_login_page.php');
    exit();
  }
?>

<?php

$user_id = $_SESSION['id'];
$order_id=$_GET['order_id'];

$result = mysqli_query($con, "DELETE FROM cart WHERE cart_id=$order_id");

header('location: cart.php');
?>