<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
require "includes/head.php" ;
require 'includes/db.php';


  if (empty($_GET['id'])) {
    echo "<script> alert('Please select a product first...!!') </script>";
    echo "<script> location = 'all-product.php' </script>";
  }
    else{
    require 'includes/db.php';
    $id = mysqli_escape_string($con, $_GET['id']);

    $sql = mysqli_query($con, "SELECT * FROM product WHERE id = '$id' ");
     $row = mysqli_fetch_assoc($sql); 
     $prod_price=$row['rate'];
     $prod_name=$row['name'];
     $prod_quantity= $row['quantity'];
     if (isset($_SESSION['id'])) {
       $user=$_SESSION['id'];
       $query=mysqli_query($con,"SELECT * FROM users WHERE user_id='$user' ");
       $row1=mysqli_fetch_array($query);
     $cid=$row1['user_id'];
     }
     
      


     
                                
    

     if (isset($_POST['submit'])){
      
                                 

                                        $id=$id;
                                        $prod_price=$prod_price;
                                        $prod_name=$prod_name;
                                       $prod_qty=$_POST['prod_qty'];
                                                                               
                                        $total = $prod_price * $prod_qty;    
                                         $cid=$cid;   
                                        

                                       


                                        if($prod_qty>$prod_quantity){  
                                        	echo "<br><center><h4><font color='red'><b>Error!</b> Product not Available.</font></h4></center>";

            
                                            if(empty($prod_qty)) {
                                            echo "<br><center><h4><font color='red'><b>Error!</b> Enter Product Quantity.</font></h4></center>";
                                        }

                                        } else {

                                        mysqli_query($con,"INSERT INTO cart (product_id,prod_name,quantity,rate,total,user_id) 
                                                VALUES ('$id','$prod_name','$prod_qty','$prod_price','$total','$cid')") ;
                                            ?>
                                         
                                            <script type="text/javascript">
                                                alert("Product Added To Cart!");
                                                window.location = "cart.php";
                                            </script>
   
                                            <?php 
                                        }
                                        }
                                      }
    

  
?>

<body>
  <div id="main-wrapper">

    <?php
    if(isset($_SESSION['id'])){

     require "includes/nav.php"; 
   }
   else{
    require 'includes/nav2.php';

 }
 ?>
    <!-- end #header -->
    <!-- thumbnail slide section -->

    <div id="page-content">
      <!-- start #main-wrapper -->
      <div class="container">
        <div class="row mt30">
          <div class="col-md-12">
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab-1">
                <div class="all-menu-details">
                  <div class="single-menu">
                    <div class="list-image">
                      <img src="admin/product_image/<?= $row['image'] ;?>">
                    </div>
                    <div class="all-details">
                      <div class="visible-option">
                        <div class="details">
                          <h6><?= $row['name'] ;?></h6>
                         
                          
                       
                        </div> 

                        <div class="price-option">
                          <h4>৳ <?= $row['rate'] ;?></h4>
                         
                        </div>

                        <!-- end .price-option-->
                         <div class="text-bottom">
                          <?php
                if(isset($_SESSION['id'])){
                  echo "
                    <button style='margin-top:240px; margin-right:250px; 'class='btn btn-success btn-round pull-right' data-toggle='modal' data-target='#myModal'>
                <i class='now-ui-icons shopping_cart-simple'></i>Add To Cart</button>
                  ";
                }
                else{
                  echo "
                    <h4>You need to <a href='user_login_page.php'>Login</a> to checkout.</h4>
                  ";
                }
              ?>
                          

                        </div>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form group">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Enter Quantity:</h4>
                  </div>
                  <div class="modal-body">

                    <div class="input-append">
                        <input type="number" name="prod_qty" id="prod_qty">
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-round" data-dismiss="modal">Close</button>
                    <a><button type="submit" name="submit" class="btn btn-success btn-round">Order</button></a>
                  </div>
                </div>
                </form>

              </div>
            </div>
            </div>
                        
                          
                        
                      </div>
                    </div>
                    <!-- end .all-details -->
                  </div> <!-- end .single-menu -->
                </div> <!-- end .all-menu-details -->
              </div> <!-- end .tab-pane -->
            </div> <!-- end .tab-content -->
          </div>
          <!--end main-grid layout-->
        </div>
        <!-- end .row -->
      </div>
      <!--end .container -->
      <!-- footer begin -->
      <?php require "includes/footer.php"; ?>
</body>

</html>
