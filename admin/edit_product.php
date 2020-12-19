<?php 

require "inc/head.php"; 
require "inc/security.php";
require 'inc/db.php';


?>
<?php

if(isset($_POST['submit'])){

  $product_rate= $_POST['rate'];
  $product_qty=$_POST['quantity'];
  $order_id=$_GET['id'];
    mysqli_query($con,"UPDATE product SET
                          rate='$product_rate', quantity='$product_qty' WHERE id='$order_id'"); 
                          ?>

                                           <script type="text/javascript">
                                                alert("price Updated");
                                                window.location= "product_list.php";
                                            </script>

                                                         <?php
}
              ?>
 
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require "inc/sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require "inc/topbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h4>Product list</h4>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Rate</th>
                      <th>Quantity</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>

                  <tbody>
                    <form method="POST">
                     <?php

                     
                      $prod_id=$_GET['id'];

                    $query=mysqli_query($con,"SELECT * FROM product WHERE id='$prod_id'") or die (mysqli_error());
                $row=mysqli_fetch_array($query);
                $count=mysqli_num_rows($query);
                $produ_id=$row['id'];
                $query2=mysqli_query($con,"SELECT * FROM product WHERE id='$produ_id'") or die (mysqli_error());
                $row2=mysqli_fetch_array($query2);


                      ?>
                      <tr>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['category'] ;?></td>
                      <td><input type="number" name="rate" id="rate" value="<?= $row['rate'] ;?>"></td>
                      <td><input type="number" name="quantity" id="quantity" value="<?= $row['quantity'] ;?>"></td>
                      <td>
                          
                           <button type="submit" name="submit" class="btn btn-success btn-round">Update</button> 
                          
                        

                          
                      </td>
                    </tr>
                 
                  </form>
                  </tbody>
                </table>

              </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
<?php require "inc/footer.php"; ?>