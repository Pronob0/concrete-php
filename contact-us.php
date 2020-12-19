<!DOCTYPE html>
<html lang="en">
<?php 
  require "includes/head.php" ;
  require "includes/db.php";

  if (isset($_POST['submit'])) {
    $name = mysqli_escape_string($con, $_POST['name']);
    $email = mysqli_escape_string($con, $_POST['email']);
    $mobile = mysqli_escape_string($con, $_POST['mobile']);
    $message = mysqli_escape_string($con, $_POST['message']);

    $sql = mysqli_query($con, "INSERT INTO usermessage (name, email, mobile, message, status)VALUES('$name', '$email', '$mobile', '$message', '0')  ");

    if ($sql) {
      echo "<script> alert('Thank you for message...!!') </script>";
      echo "<script> location = 'contact-us.php' </script>";
    }
  }
?>

<body>
  <div id="main-wrapper">
    <?php require "includes/nav.php"; ?>
    <!-- end #header -->

    <div class="page-content">
      <!-- end .map-section -->
      <div class="contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="contact-details">
                <h4>Contact Details</h4>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <h5>Head Office</h5>
                    <div class="address clearfix">
                      <p><i class="fa fa-map-marker"></i>
                      </p>
                      <p>Uttara: 10<br>Dhaka<br>Bangladesh</p>
                    </div>
                    <div class="time-to-open clearfix">
                      <p><i class="fa fa-clock-o"></i>
                      </p>
                      <p>
                        <strong>Saturday - Thursday:</strong>9am - 11pm<br>
                    </div>
                  </div>
                  <!-- end .grid-layout -->
                  <div class="col-md-6 col-sm-6">
                    <h5>Brunch Office</h5>
                    <div class="address clearfix">
                      <p><i class="fa fa-map-marker"></i>
                      </p>
                      <p>Comilla<br>Chattagram<br>Bangladesh</p>
                    </div>
                    <div class="time-to-open clearfix">
                      <p><i class="fa fa-clock-o"></i>
                      </p>
                      <p>
                        <strong>Saturday - Thursday:</strong>9am - 11pm<br>
                    </div>
                  </div>
                  <!-- end .grid-layout -->
                </div>
                <!-- end nasted .row -->
              </div>
              <!-- end .contact-details -->
            </div>
            <!-- end .main-grid-layout -->

            <div class="col-md-6">
              <div class="send-message">
                <h4>Send Message <br> Request for Work Permission</h4>

                <form action="" method="post">
                  <div class="row">

                    <div class="col-md-12">
                      <input name="name" type="text" placeholder="Name*" required>
                    </div>

                    <div class="col-md-6 col-sm-6">
                      <input name="email" type="email" placeholder="Email*" required>
                    </div>

                    <div class="col-md-6 col-sm-6">
                      <input name="mobile" type="number" placeholder="mobile number" required>
                    </div>

                  </div>
                  <!-- end nasted .row -->
                  <textarea name="message" placeholder="Your message" required></textarea>
                  <button name="submit"><i class="fa fa-paper-plane-o"></i> Submit Message</button>

                </form>

              </div>
              <!-- end .send-message -->
            </div>
            <!-- end .main-grid-layout -->
          </div>
          <!-- end .row -->
        </div>
        <!-- end .container -->
      </div>
      <!-- end .contact-us -->
    </div>
    <!-- end page-content -->

    <!--footer start-->
    <?php require "includes/footer.php"; ?>

</body>

</html>
