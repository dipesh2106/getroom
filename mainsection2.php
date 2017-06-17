
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
					     <div>
							<div class="title clearfix">
                     			<center><h3><a class="alert-info"> The Finest Properties diplayed .... </a></h3>
                     			</center>
							</div><!-- end title -->
						 </div>
						 <?php 
						 	require_once("connection.php");
							extract($_REQUEST);
							$q=mysql_query("select * from advertisement order by id desc limit 6");
							while($a=mysql_fetch_array($q))
							{
							$email=$a['email'];
							$q1=mysql_query("select * from adphotos where email='".$email."'");
							$a1=mysql_fetch_array($q1);
						 ?>
						<div class="property_wrapper boxes clearfix">
							<div class="ImageWrapper boxes_img">
								<img class="img-responsive" src="<?php echo $a1['photo1'];?>" alt="">
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleMg">
							<span class="WhiteSquare"><a class="fancybox" href="<?php echo $a1['photo1'];?>"><i class="fa fa-search"></i></a></span>
								</div><!-- end Buttons -->
								<div class="box_type"><a><i class="fa fa-inr"></i></a> <?php echo $a['price'];?></div>
								<div class="status_type"><?php echo $a['status'];?></div>
							</div><!-- ImageWrapper -->
                            <center>
							<div class="title clearfix">
                            	<h3><a href="property.php?id=<?php echo $a['id'];?>?id=<?php echo $a['id'];?>"> <?php echo $a['title'];?></a></h3>
							</div><!-- end title -->
						    <div class="property_desc clearfix">
                            	<p><?php echo $a['description'];?></p>
                            </div>
							</center>
                        </div><!-- end property_wrapper -->
						<?php 
						}
						?>
						</div>