<?php
    session_start();
    require 'inc/db.php';

?>

<?php

$user_id = $_SESSION['id'];
$order_id=$_GET['id'];

$result = mysqli_query($con, "DELETE FROM product WHERE id=$order_id");

header('location: product_list.php');
?>