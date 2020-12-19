<?php
session_start();
require 'includes/head.php';
require 'includes/db.php';
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location: admin_login_page.php');
    exit();
  }

?>
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
                    
                    </tr>
                  </tfoot>
                  <tbody>

          <?php  
            $sql = mysqli_query($con, "SELECT * FROM order_details WHERE user_id='".$_SESSION['id']."'");
           while ($row = mysqli_fetch_assoc($sql)){
          ?>
                    <tr>
                      <td><?= $row['product_id'] ;?></td>
                      <td><?= $row['name'] ;?></td>
                      <td><?= $row['mobile'] ;?></td>
                      <td><?= $row['address'] ;?></td>
                      
                      <td><?= $row['rate'] ;?></td>
                      <td><?= $row['quantity'] ;?></td>
                      <td>‎<?= $row['total'] ;?></td>
                      <td><?= $row['bkash'] ;?></td>
                     
                    </tr>
          <?php } ?>         
                  </tbody>
                </table>

              </div>
              <button type="button" class="btn btn-warning btn-round" onclick = "window.print()"><span class="now-ui-icons ui-1_check"></span> Print</button> 
     <a href="index.php"><button type="button" class="btn btn-success btn-round"><span class="now-ui-icons ui-1_check"></span> Back to Homepage</button></a>
            </div>
          </div>