<?php 
require "inc/head.php"; 
require "inc/security.php";
require 'inc/db.php';

  if (isset($_POST['accept'])) {
    $order_id = $_POST['order_id'];

    $acceptsql = mysqli_query($con, "UPDATE order_details set status='1' WHERE order_id = '$order_id' ");

    if ($acceptsql) {
      echo "<script> location = 'new-order-request.php' </script>";
    }
  }
  if (isset($_POST['cancel'])) {
    $order_id = $_POST['order_id'];

    $cancelsql = mysqli_query($con, "UPDATE order_details set status='2' WHERE order_id = '$order_id' ");

    if ($cancelsql) {
      echo "<script> location = 'new-order-request.php' </script>";
    }
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
          <h4>New Order Request</h4>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Product ID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>location</th>
                      
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Transaction ID</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Product ID</th>
                     <th>Name</th>
                      <th>Mobile</th>
                      <th>location</th>
                      
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Transaction ID</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

          <?php  
                    $sql= "SELECT * from order_details WHERE status = '0'";
                    $result= $con-> query($sql);
                     while($row=$result->fetch_assoc()){ ?>
                    <tr>
                      <td><?= $row['product_id'] ;?></td>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['mobile'] ;?></td>
                      <td><?= $row['address'] ;?></td>
                      
                      <td><?= $row['rate'] ;?></td>
                      <td><?= $row['quantity'] ;?></td>
                      <td>‎<?= $row['total'] ;?></td>
                      <td><?= $row['bkash'] ;?></td>
                      <td>
                          <form action="" method="post">
                            <input type="hidden" name="order_id" value="<?= $row['order_id'] ;?>">
                            <button name="accept" type="submit" class="btn btn-success">Accept</button>
                            <button name="cancel" type="submit" class="btn btn-danger">cancel</button>
                            
                        </form>
                      </td>
                    </tr>
          <?php } ?>         
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