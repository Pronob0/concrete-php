<!DOCTYPE html>
<html lang="en">
<?php 
require "includes/head.php" ;
require 'includes/db.php';

?>

<body>
	<div id="main-wrapper">
		
		<!-- end #header -->
		<!-- thumbnail slide section -->
		<div id="page-content">
			

			<!-- start #main-wrapper -->
			<div class="container">
				<div class="row mt30">
					<div class="col-md-9 col-sm-10 col-md-push-3">
						<div class="view-style dsn">
							<div class="list-grid-view">
								<button class="thumb-view"><i class="fa fa-list"></i></button>
								<button class="without-thumb"><i class="fa fa-align-justify"></i></button>
								<button class="grid-view"><i class="fa fa-th-list"></i></button> 
							</div>
							<!-- end .list-grid-view -->
						</div>
						<!-- end view-style -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-1">
								<div class="all-menu-details">
									<h5>Senitary</h5>
						<?php  
							$sql = mysqli_query($con, "SELECT * FROM product WHERE category = 'Senitary' ");
							while ($row = mysqli_fetch_assoc($sql)) {
								
						?>

									<div class="item-list">
										<div class="list-image">
											<img src="admin/product_image/<?= $row['image'] ;?>">
										</div>
										<div class="all-details">
											<div class="visible-option">
												<a href="view.php?id=<?= $row['id'] ;?>">
													<div class="details">
														<h6>
															<?= $row['name'] ;?>
														</h6>
										

													</div>
												</a>

												<div class="price-option fl">
													<h4>৳ <?= $row['rate'] ;?></h4>

												</div>

												<!-- end .price-option-->
											
										           

											   <br>

													
													
													

													
												 
											 <!-- end .vsible-option -->
										</div>
										<!-- end .all-details -->
									</div>
								</div>
									<!-- end .item-list -->
						<?php } ?>



								</div>
								<!--end all-menu-details-->
							</div> <!-- end .tab-pane -->
						</div> <!-- end .tab-content -->
					</div>
					<!--end main-grid layout-->









	<div class="col-md-3 col-sm-12 col-xs-12 col-md-pull-9">
						<div class="side-panel">
							<form class="default-form" action="index_search.php" method="POST">

								<div class="search-keyword">
									<input type="text" name="search" id="search" placeholder="Search by keyword">
									<button type="submit" name="submit" id="submit" value="submit"><i class="fa fa-search"></i>
									</button>
								</div>
								<!-- end .search-keyword -->
																<div class="category">
									<h5 class="">Product Type</h5>
									<div class="toggle-content">
										<a href="basic.php">
											<h5 class="toggle-title">Basic Building Materials</h5>
										</a>
									</div>
									
									<div class="toggle-content">
										<a href="flooring.php">
											<h5 class="toggle-title">Flooring</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="plumbing.php">
											<h5 class="toggle-title">Plumbing</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="electrical.php">
											<h5 class="toggle-title">Electricals</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="ceiling.php">
											<h5 class="toggle-title">Ceiling</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="senitary.php">
											<h5 class="toggle-title">Senitary</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="colour.php">
											<h5 class="toggle-title">Colour</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="kitchen.php">
											<h5 class="toggle-title">Kitchen</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="door.php">
											<h5 class="toggle-title">Doors & Windows</h5>
										</a>
									</div>

									<div class="toggle-content">
										<a href="hardware.php">
											<h5 class="toggle-title">Hardware</h5>
										</a>
									</div>




								</div>
								<!--end .category-->
							</form>
							<!-- end form -->
						</div>
						<!-- end side-panel -->
					</div>
					<!--end .col-md-3 -->
				</div>
				<!-- end .row -->
			</div>
			<!--end .container -->
			<!-- footer begin -->
			<?php require "includes/footer.php"; ?>
</body>

</html>