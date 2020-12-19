<?php
    session_start();
    require 'includes/db.php';

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
     <?php
        require 'includes/head.php';
     ?>

</head>
<body class="index-page sidebar-collapse">
    <div class="wrapper"><br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">

                      <a class="btn btn-primary btn-round" href="user_index.php"><i class="now-ui-icons shopping_basket"></i> &nbsp Shop more items</a>
                      <hr color="orange"> 
                
                <div class="col-md-12">
                <br>
            
                <div class="panel panel-success panel-size-custom">
                        <div class="panel-body">





  <?php

    $query=mysqli_query($con, "SELECT * from cart WHERE user_id='".$_SESSION['id']."' ");
    $count=mysqli_num_rows($query);

  ?>
  <h5>[ <small><?php echo $count;?> </small>] types of item.</h5>


<?php
                  


                                    if (isset($_POST['submit'])) {

                                        $order_id=$_GET['order_id'];
                                        $prod_qty = $_POST['prod_qty'];
                                        $total = $_POST['prod_qty']*$_POST['total'];

      

                         mysqli_query($con,"UPDATE cart SET
                          quantity='$prod_qty',total='$total' WHERE cart_id='$order_id'"); 
                     
                                            ?>

                                              <script type="text/javascript">
                                                alert("Quantity Updated");
                                                window.location= "cart.php";
                                            </script>


                                            <?php
                                    }
                                    ?>

<form method="post">
  

  <button type="submit" name="submit" class="btn btn-success btn-round">Update</button> 
  <br><br>

  
  <table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Name</th>
                  <th width="100">Quantity</th>
                  <th width="100">Price(Php)</th>
                  <th width="100">Total(Php)</th>
        </tr>
              </thead>
              <tbody>
                <?php 
                      $user_id = $_SESSION['id'];
                      $order_id=$_GET['order_id'];

                $query=mysqli_query($con,"SELECT * FROM cart WHERE cart_id='$order_id'") or die (mysqli_error());
                $row=mysqli_fetch_array($query);
                $count=mysqli_num_rows($query);
                $prod_id=$row['product_id'];
                $query2=mysqli_query($con,"SELECT * FROM product WHERE id='$prod_id'") or die (mysqli_error());
                $row2=mysqli_fetch_array($query2);
              

                ?>
        <tr>


                  <td> <img height="100" width="150" src="admin/product_image/<?= $row2['image'] ;?>"></td>
                 <td><b><?php echo $row2['name'];?></b><br><br></td>
          <td>
      <div class="input-append">
<input type="number" name="prod_qty" id="prod_qty">

     </div>


          </td>
                  <td><?php  echo $row2['rate']; ?></td>
                  <td><?php echo $row['total']; ?></td>
              <input type="hidden" name="total" value="<?php echo $row2['rate'];?>">
                </tr>
        
 
        </tbody>
            </table>
    
    
           
        
  <a href="cart.php" class="btn btn-large"><i class="icon-arrow-left"></i> Cancel </a>

</form>







                        </div>
                    </div> 
                </div>
            </div>
        </div>
<br><br><br><br>
<footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="" target="_blank">
                                Creative ABC
                            </a>
                        </li>
                        <li>
                            Elective02
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by Serve(8) Web Solutions, Inc.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->

<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>


   <!---  inserted  -->
    <!-- SlimScroll -->
   
    <script>
      $(function () {
        $("#example1").DataTable({
        });
      });
    </script>
     <!--  inserted  -->

</html>