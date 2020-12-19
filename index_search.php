<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 
require "includes/head.php" ;
require 'includes/db.php';

?>
<body>
								 <div class="tab-pane active" id="">


								 	<?php
                  $search=$_POST['search'];
                                      if(isset($_POST['submit'])){
                                      	
                                      	$query=("SELECT * from product where category LIKE '%$search%' OR name LIKE '$%search%'")  or die ("Could not search");
                                      	$result= mysqli_query($con, $query);

                                      while ($res=mysqli_fetch_array($result)) {
                                      	$id=$res['id'];
                                      
								 	?>
                        
                           
                                                                
                            
                              <div class="row-sm-3">
                                <div class="thumbnail">
                                    <?php if($res['image'] != ""): ?>
                                    <img src="admin/product_image/<?php echo $res['image']; ?>" width="300px" height="200px">
                                    <?php else: ?>
                                    <img src="admin/product_image" width="300px" height="200px">
                                    <?php endif; ?>
                                <div class="caption">
                                  <h5><b><?php echo $res['name'];?></b></h5>
                                  <h6><a class="btn btn-success btn-round" title="Click for more details!" href="view.php?id=<?php echo $res['id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">Php<?php echo $res['rate']; ?></medium></h6>
                                </div>

                                </div>
                              <hr color="orange">
                              </div>
       <?php }?> 
                            <?php }?>
                        </div>
                                
                            
	
</body>
</html>