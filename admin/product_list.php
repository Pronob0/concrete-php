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
                     <?php  
                    $sql= "SELECT * from product";
                    $result= $con-> query($sql);
                     while($row=$result->fetch_assoc()){ ?>
                      <tr>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['category'] ;?></td>
                      <td><?= $row['rate'] ;?></td>
                      <td><?= $row['quantity'] ;?></td>
                      <td>
                          
                          <a class="btn btn-danger" href="delete_product.php?id=<?= $row['id'] ;?>">Delete</a>
                        

                          <a class="btn btn-success" href="edit_product.php?id=<?= $row['id'] ;?>">Edit</a>
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