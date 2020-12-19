<!DOCTYPE html>
<html lang="en">
<?php require 'includes/head.php';?>
<body>
  <!--nav-section start-->

	    <?php
	    session_start();
	    require 'includes/db.php';
    if(isset($_SESSION['id'])){

     require "includes/nav.php"; 
   }
   else{
    require 'includes/nav2.php';

 }
 ?>
<!--nav-section End-->

    <div id="page-content">
      <!-- masterslider -->
     <?php require 'includes/slider.php';?>
      <!-- end of masterslider -->

      <!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/basic.png">
									<h4>Basic Building Materials</h4>
									<figcaption> <a href="basic.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12  text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/flooring.jpg">
									<h4>Flooring</h4>
									<figcaption><a href="flooring.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a>
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/plumbing.jpeg">
									<h4>Plumbing</h4>
									<figcaption> <a href="plumbing.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img class="img-responsive" src="img/content/electrical.webp">
									<h4>Electricals</h4>
									<figcaption> <a href="electrical.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/ceiling.jpg">
									<h4>Ceiling</h4>
									<figcaption> <a href="ceiling.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12  text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/senitary.jpg">
									<h4>Senitary</h4>
									<figcaption><a href="senitary.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a>
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/colour.png">
									<h4>Colour</h4>
									<figcaption> <a href="colour.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img class="img-responsive" src="img/content/kitchen.jpeg">
									<h4>Kitchen</h4>
									<figcaption> <a href="kitchen.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/door.jpg">
									<h4>Doors & Windows</h4>
									<figcaption> <a href="door.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a> 
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12  text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/hardware.jpg">
									<h4>Hardware</h4>
									<figcaption><a href="hardware.php" class="btn btn-default-white"><i class="fa fa-file-text-o"></i>Show all</a>
									</figcaption>
								</figure>
							</div>
						</div>

					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- star.chef-welcome -->
			<div class="chef-welcome" style="background: url(img/content/chef-welcome-bg.jpg) ;">
				<div class="container">
					<h1 style="color: white">Looking for Building Materials?</h1>
					<p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
				</div>
				<!-- end .container -->
			</div>
			<!--end .chef-welcome-->

			<!--start small-slide section -->
			<div id="sm-slide-section" style="background: url(img/content/clints-say-bg.jpg);">
				<div class="container">
					<div class="slide-heading text-center">
						<h4>Our Clients Say</h4>
					</div>
					<!--end .clients heading-->
					<div id="slide-content" class="owl-carousel">
						<div class="item">
							<img src="img/content/sm-slide-img1.png" alt="img-1">
							<div class="details">
								<h5><a href="#">Client 1</a>
								</h5>
								<p>Absolutely quality product! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.png" alt="img-2">
							<div class="details">
								<h5><a href="#">Client 2</a>
								</h5>
								<p>Absolutely quality product! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img1.png" alt="img-1">
							<div class="details">
								<h5><a href="#">Client 3</a>
								</h5>
								<p>Absolutely quality product! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.png" alt="img-2">
							<div class="details">
								<h5><a href="#">Client 4</a>
								</h5>
								<p>Absolutely quality product! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img1.png" alt="img-1">
							<div class="details">
								<h5><a href="#">Client 5</a>
								</h5>
								<p>Absolutely quality product! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.png" alt="img-2">
							<div class="details">
								<h5><a href="#">Client 6</a>
								</h5>
								<p>Absolutely quality product! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->
					</div>
					<!-- end i.slide-content -->
				</div>
				<!-- end .container-->
			</div>
			<!-- end .sm-slide-section-->
		</div>
		<!-- end #page-content -->
	</div>
  <?php require "includes/footer.php"; ?>
</body>
</html>