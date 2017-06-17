<?php
require_once("connection.php");
extract($_REQUEST);
if(isset($Submit))
{
	mysql_query("insert into subscribe set email='".$email."'");
}
?>
<section class="message_banner dm-shadow">
        	<div class="container">
            	<div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="message">
                        <h2>Be a part of <strong>Get Room</strong> and let us search a place for you.</h2>
                        </div>
                	</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="message">
                      		<a class="btn btn-primary btn-block btn-lg" href="#"><i class="fa fa-home"></i> Back To Top</a>                       
					    </div>
                	</div>
                </div>
            </div>
        </section>
        
        <footer class="footer1">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 first clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3>Links</h3><hr></div>
                            <ul class="list">
                            	<li><a title="" href="index2.php">Home</a></li>
                            	<li><a title="" href="about2.php">About Us</a></li>
                            	<li><a title="" href="feedback2.php">Feedback</a></li>
                            	<li><a title="">Login</a></li>
                            	<li><a title="">Register</a></li>
                            	<li><a title="" href="faqs2.php">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                	<!-- end col-lg-3 -->
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3><i class="fa fa-home"></i> About GET ROOM</h3><hr></div>
                            	<p>We here at GET ROOM helps you to find a perfect place for you to live in, with minimal efforts. We facilitates you to search for the place in your desired location by just sitting at your place and using your laptop or phone.</p>
                            <a href="about2.php" class="btn btn-primary btn-sm">READ MORE</a>                        </div>
                    </div>
                	<!-- end col-lg-3 -->
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3>Line to Remember</h3><hr></div>
                            <ul class="tweet">
                            	<li>"The need of knocking different doors and making trouble for other humans is over. Now you can use our space to find your space."
								      <br />
                                    <a> Anonymous</a>
								</li>
                            </ul>
                        </div>
                    </div>
                	<!-- end col-lg-3 -->
                	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 last clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3><i class="fa fa-envelope-o"></i>Want to Subscribe</h3><hr></div>
                            <p>If you want to get the latest updates related to properties around you, please do  Subscribe.</p>
                              <form class="form-inline" role="form" method="post" action="index2.php">
                                <div class="form-group">
                                  <input type="email" class="form-control" name="subscribe" id="exampleInputEmail2" placeholder="Enter email">
                                </div>
                                <input type="submit" class="btn btn-primary" value="SUBSCRIBE" name="Submit">
                              </form>
                        </div>
                    </div>
                	<!-- end col-lg-4 -->
                </div><!-- row -->
            </div><!-- container -->
        </footer><!-- footer1 -->
        
        <section class="copyright">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-6 col-sm-6 col-md-6">
                        <p><small>Copyright@GET ROOM</small></p>
                    </div>
                	<div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="social clearfix pull-right">
                        </div><!-- end social -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end copyright -->
        