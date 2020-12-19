<?php

session_start();
require 'includes/head.php';
require 'includes/db.php';
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<br>
		<br>
  <a class="btn btn-primary btn-round" href="index.php"><i class="now-ui-icons shopping_basket"></i>Shop more items</a>
  <br>
  <br>
  <?php

  	$query=mysqli_query($con, "SELECT * from cart WHERE user_id='".$_SESSION['id']."' ");
  	$count=mysqli_num_rows($query);

  ?>
  <h5>[ <small><?php echo $count;?> </small>] types of item.</h5>
  
  <table class="table">
    <thead>
      <tr>
        <th>product</th>
        <th>name</th>
      
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>option</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    
            $query1=mysqli_query($con,"SELECT * FROM cart WHERE user_id='".$_SESSION['id']."'  ");
            while($row=mysqli_fetch_array($query1)){
            $count=mysqli_num_rows($query1);
            $prod_id=$row['product_id'];

            $query2=mysqli_query($con,"SELECT * FROM product WHERE id='$prod_id'");
            $row2=mysqli_fetch_array($query2);
            
          ?>

      <tr>
        <td> <img height="100" width="150" src="admin/product_image/<?= $row2['image'] ;?>"></td>
        <td><b><?php echo $row2['name'];?></b><br><br></td>
        <td><br><?php  echo $row['quantity']; ?></td>
        <td><br><?php  echo $row2['rate']; ?></td>
        <td><br><?php echo $row['total'];?></td>
         <td>     
                    <a href="edit_order_details.php?order_id=<?php echo $row['cart_id'];?>" ><button class="btn btn-warning btn-round" type="button">update qty</button></a>
                    <br><br>
                     <a href="delete_order_details.php?order_id=<?php echo $row['cart_id'];?>" ><button class="btn btn-danger btn-round" onclick="return confirm('Are you sure you want to delete?')"  type="button">remove</button></a>
                  </td>
    <?php } ?>
      </tr>      
      <tr>
        <td></td>
        <td></td>
        <td colspan="2" align="right"><b>Total Price</b></td>
        <td> <strong>
                  <?php
                     require 'includes/db.php';
                     $sql="SELECT sum(total) as 'sumtotal' from cart WHERE user_id='".$_SESSION['id']."' ";
      $res=mysqli_query($con,$sql);
      $data=mysqli_fetch_array($res);
      echo $data['sumtotal'];
         ?></strong>
            </td>
            <td>
              <?php
                if(isset($_SESSION['id'])){
                  echo "
                    <h4><a href='location.php'>Checkout</a></h4>
                  ";
                }
                else{
                  echo "
                    <h4>You need to <a href='login.php'>Login</a> to checkout.</h4>
                  ";
                }
              ?>

            	
            </td>
      </tr>
                   
    </tbody>
  </table>
  
</div>

	
</body>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 10);
        }
    }
</script>
    <script>
      $(function () {
        $("#example1").DataTable({
        });
      });
    </script>
</html>