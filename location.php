<?php
session_start();
require 'includes/head.php';
require 'includes/db.php';
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location: admin_login_page.php');
    exit();
  }



        if (empty($_POST['date']) || empty($_POST['name']) || empty($_POST['mobile']) || empty($_POST['trxid']) || empty($_POST['address'])) { 




            ?>
             

             <script >

              alert("Fill the blanks");
        </script>
        
<?php
    }
    else{
    
    $sql=mysqli_query($con, "SELECT * FROM cart WHERE user_id='".$_SESSION['id']."'  ");
    $row=mysqli_fetch_assoc($sql);
    $cart_id=$row['cart_id'];
    $product_id=$row['product_id'];
    $product_name=$row['prod_name'];
    $prod_qty=$row['quantity'];
    $prod_rate=$row['rate'];
    $total=$row['total'];
    $user_id=$row['user_id'];

    $sql2=mysqli_query($con, "SELECT * FROM product");
    $row2=mysqli_fetch_assoc($sql2);
    $product_quantity=$row2['quantity'];
    $new=$product_quantity-$prod_qty;

   

   

    if (isset($_POST['submit'])) {
        
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];
        $address=$_POST['address'];
        $bkash=$_POST['trxid'];


       $query1=mysqli_query($con, "INSERT INTO order_details (user_id,cart_id,product_id,product_name, quantity, rate, total,name, mobile, date, address,bkash,status) VALUES('$user_id','$cart_id','$product_id','$product_name','$prod_qty','$prod_rate','$total','$name','$mobile','$date','$address','$bkash','0') ")
        or die(mysql_error());
         $query2=mysqli_query($con, "UPDATE product set quantity='$new' WHERE id='$product_id'");
 






    ?>

                                             <script >

                                                alert("Sucessfully ordered!");
                                                window.location = "user_payment.php";
                                                
                                             </script>

    
<?php

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div id="main-wrapper">
    <?php require "includes/nav.php"; ?>
    <div class="page-content">
      <!-- end .map-section -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Give your information please</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label for="mobile">Receiver Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="mobile">Adress</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mobile">Date</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>
  <div class="form-group">
                    <label for="mobile">Bkash: <span style="color: red">01976814812</span></label>
                    <input type="text" name="trxid" id="trxid" class="form-control" placeholder="Enter Bkash Transaction ID">
                </div>
                                <div class="form-group">
                    
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
    
</body>
</html>