<?php 
require "inc/head.php"; 
require "inc/security.php";

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
          <h4>Worker list</h4>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Category</th>
                      <th>Area</th>
                      <th>Skill</th>
                      <th>Rate</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Category</th>
                      <th>Area</th>
                      <th>Skill</th>
                      <th>Rate</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>

          <?php  
            $sql = mysqli_query($conn, "SELECT * FROM worker WHERE status = '0' ");
            while ($row = mysqli_fetch_assoc($sql)) {
              $now = $row['status'];
              if ($now == '0') {
                $status = 'Available';
              }elseif($now == '1'){
                $status = 'Unvailable';
              }
          ?>
                    <tr>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['mobile'] ;?></td>
                      <td><?= $row['category'] ;?></td>
                      <td><?= $row['area'] ;?></td>
                      <td><?= $row['skill'] ;?></td>
                      <td>‎৳ <?= $row['rate'] ;?></td>
                      <td><?= $status;?></td>
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