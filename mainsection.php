<style type="text/css">
    #i img{
		width:1350px;
		height:620px;
	}
</style>
<section id="one-parallax" class="parallax" style="background-image: url('demos/01_Parallax.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="mapandslider">
        	<div class="overlay1 dm-shadow">
			<div class="container">
				<div class="row">
				    <div class="col-lg-12 col-md-8 col-sm-12">
                        <div id="property-slider" class="clearfix">
                            <div class="flexslider">
                                <ul class="slides">
											<?php 
											require_once("connection.php");
											extract($_REQUEST);
											$q=mysql_query("select * from advertisement order by id desc limit 4");
											while($a=mysql_fetch_array($q))
											{
											$email=$a['email'];
											$q1=mysql_query("select * from adphotos where email='".$email."'");
											$a1=mysql_fetch_array($q1);
											?>
								<li>
                                        <div class="desc">
                                            <div class="ps-desc">
                                                <h3><a href="property.php?id=<?php echo $a['id'];?>"><?php echo $a['title'];?></a></h3>
                                                <p><?php echo $a['description'];?></p>
                                                <span class="type"><?php echo $a['category'];?></span>
                                                <span class="price"><a><i class="fa fa-inr"></i></a> <?php echo $a['price'];?></span>
                                                <a class="status"><?php echo $a['status'];?></a>                                           
											 </div>
                                        </div>
										<div id="i">
                                        <a href="property.php?id=<?php echo $a['id'];?>"><img src="<?php echo $a1['photo1'];?>" alt=""></a>	
										</div>								
								  </li>
								  			<?php
											}
											?>
								</ul><!-- end slides -->
                            </div><!-- end flexslider -->
                        </div><!-- end property-slider -->
    				</div><!-- end col-lg-8 -->
                    
	
				</div><!-- end row -->
			</div><!-- end dm_container -->
            </div>
            </div>
		</section><!-- end mapandslider -->