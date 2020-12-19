<?php 
require "inc/head.php"; 
require "inc/security.php";
require 'inc/db.php';
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

        <?php require "inc/topbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="add_product.php">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Add new Product</div>
                        
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-plus fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

  <?php  
    $product_count_sql = mysqli_query($con, "SELECT * FROM product");
    $product_count = mysqli_num_rows($product_count_sql);
  ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="product_list.php">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Product</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $product_count ;?></div>
                      </div>
                      <div class="col-auto">
                        <i class="far fa-address-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>



  <?php  
    $new_order_request_sql = mysqli_query($con, "SELECT * FROM order_details");
    $new_order_request = mysqli_num_rows($new_order_request_sql);
  ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="new-order-request.php">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Order Request</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?$new_order_request ;?></div>
                      </div>
                      <div class="col-auto">
                        <i class="far fa-address-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>


<?php  
  $message_sql = mysqli_query($con, "SELECT * FROM usermessage WHERE status = '0' ");
  $count_message = mysqli_num_rows($message_sql);
?>
            
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <a href="new-message.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">New Message</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_message ;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
<?php require "inc/footer.php"; ?>