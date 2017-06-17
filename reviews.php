		<section id="two-parallax" class="parallax" style="background-image: url('demos/03_Parallax.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="threewrapper">
                <div class="overlay1 dm-shadow">
                    <div class="container">
                    	<div class="row">
                        	<div class="text-center clearfix">
                            	<h3 class="big_title">User Reviews<small>Countless happy customers... </small></h3>
                            </div><!-- text-center -->
							<?php 
							require_once("connection.php");
							$q=mysql_query("select * from feedback order by id desc limit 4");
							while($a=mysql_fetch_array($q))
							{
							$email=$a['email'];
							$q1=mysql_query("select * from siteregister where email='".$email."'");
							$b=mysql_fetch_array($q1);
							?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="boxes testimonial_widget text-right first" data-effect="helix">
                                    <div class="image">
                                    	<img class="img-circle img-responsive img-thumbnail" alt="" src="<?php echo $b['profilepath'];?>" />
                                    </div>
                                    <div class="testimonial_desc">
                                    <h3 class="title"><?php echo $a['name'];?></h3>
                                    <p><i class="fa fa-quote-left"></i> <?php echo $a['feedback'];?><i class="fa fa-quote-right"></i></p>
                                    </div>
								</div>
                            </div>
							<?php
							}
							?>
							</div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end overlay1 -->
            </div><!-- end threewrapper -->
        </section><!-- end parallax -->