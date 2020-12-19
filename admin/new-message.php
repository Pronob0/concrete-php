<?php 
require "inc/head.php"; 
  require "inc/security.php";
  require "inc/db.php";
  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $arcsql = mysqli_query($con, "UPDATE usermessage SET status = '1' WHERE id = '$id' ");
    if ($arcsql) {
      echo "<script> location = 'new-message.php' </script>";
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
          <h4>New message</h4>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

          <?php  
            $sql = mysqli_query($con, "SELECT * FROM usermessage WHERE status = '0' ");
            while ($row = mysqli_fetch_assoc($sql)) {
          ?>
                    <tr>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['email'] ;?></td>
                      <td><?= $row['mobile'] ;?></td>
                      <td><?= $row['message'] ;?></td>
                      <td>
                        <form action="" method="post">
                          <input type="hidden" name="id" value="<?= $row['id'] ;?>">
                          <button class="btn btn-primary" name="submit" type="submit">Archive</button>
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