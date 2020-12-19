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

        <!-- Topbar -->
        <?php require "inc/topbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h4>Accepted Order Request</h4>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <tr>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>location</th>
                    
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Transaction ID</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Name</th>
                      <th>Mobile</th>
                      <th>location</th>
                     
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Transaction ID</th>
                   
                    </tr>
                  </tfoot>
                  <tbody>

          <?php  
                    $sql= "SELECT * from order_details WHERE status = '2'";
                    $result= $con-> query($sql);
                     while($row=$result->fetch_assoc()){ ?>
                      
                    <tr>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['mobile'] ;?></td>
                      <td><?= $row['address'] ;?></td>
                      
                      <td><?= $row['quantity'] ;?></td>
                      <td>‎<?= $row['total'] ;?></td>
                      <td><?= $row['bkash'] ;?></td>
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