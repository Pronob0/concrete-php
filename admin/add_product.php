<?php 
require "inc/head.php"; 
require "inc/security.php";
require "inc/db.php";



 if (isset($_POST['submit'])) {

  
// upload folder target
    $fnum=$_FILES['image']['name'];
    $target = "./product_image/".$fnum;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $name =  $_POST['name'];
    $category = $_POST['category'];
    $rate =$_POST['rate'];
   $quantity =$_POST['quantity'];
    $image = $_FILES['image']['name'];


    $sql = "INSERT INTO product VALUES (' ','$name', '$category', '$rate', '$quantity', '$image')";
    $run_sql=mysqli_query($con, $sql);

      if ($run_sql) {
      echo "<script> alert('New product added..!!') </script>";
      echo "<script> location = 'add_product.php' </script>";
    }


  }
// moving uploaded file to targated folder
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
          <h3>Add New Product</h3>
          
          <form action="" method="post" enctype="multipart/form-data">


            <div class="form-group">
              <label for="name">Name: </label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Product Name" required>
            </div>


            <div class="form-group">
              <label for="category">Category</label>
              <select name="category" class="form-control" id="category" required>
                <option>Select Product Category</option>
                <option value="Basic Building Materials">Basic Building Materials</option>
                <option value="Flooring">Flooring</option>
                <option value="Plumbing">Plumbing</option>
                <option value="Electricals">Electricals</option>
                <option value="Ceiling">Ceiling</option>
                <option value="Senitary">Senitary</option>
                <option value="Colour">Colour</option>
                <option value="Kitchen">Kitchen</option>
                <option value="Doors & Windows">Doors & Windows</option>
                <option value="Hardware">Hardware</option>

              </select>
            </div>




            <div class="form-group">
              <label for="rate">Rate: </label>
              <input name="rate" type="number" class="form-control" id="rate" placeholder="Product rate " required>
            </div>

                        <div class="form-group">
              <label for="quantity"> Quantity: </label>
              <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter Quantity" required>
            </div>

           

            <div class="form-group">
              <label for="image">Image:</label>
              <input name="image" type="file" class="form-control-file" id="image">
            </div>


            <div class="form-group">
              <input class="btn btn-success" name="submit" type="submit" value="Submit">
            </div>

          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require 'inc/footer.php';?>