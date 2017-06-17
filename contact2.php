<?php
include("connection.php");
extract($_REQUEST);
session_start();
if($_SESSION['e']=="")
{
	header("location: login.php");
	exit();
}
if(isset($Submit))
{
mysql_query("insert into contact set name='".$name."', email='".$email."', phone='".$phone."', issue='".$issue."', description='".$description."'");
header("location: index2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM Contact</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Style CSS -->
	<link href="style.css" rel="stylesheet">
    
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	  <script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png">
</head>
<body>
      <?php include("header2.php");?>
	   <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<?php include("leftside2.php");?>
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
					   <div class="property_wrapper boxes clearfix">
                    	<div class="modal-body clearfix">
                        <h3 class="big_title">Do you have questions? <small>We're here to help you</small></h3>
						   <p> We are always active to provide you any sort of help you need. Just write to us and we assure you that we will work hard to make you satisfied.</p>
                            <hr>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="ImageWrapper boxes_img">
                            		<img src="demos/GR.jpg" class="img-responsive" alt="">
									<div class="ImageOverlayH"></div>
										<div class="Buttons StyleSc">
											<span class="WhiteSquare"><a href="#"><i class="fa fa-facebook"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-twitter"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-envelope"></i></a></span>
										</div>
								</div>
                                <div class="servicetitle"><h3>Contact Details</h3></div>
                                <ul>
								    <li><i class="fa fa-envelope"></i> getroomhere@gmail.com</li>
                            		<li><i class="fa fa-phone-square"></i> (+91) 9549645870</li>
                            	</ul>
                            </div>
                            
                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                <form action="" method="post" name="contactform" class="row" id="contact">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="true"> 
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required="true"> 
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required="true"> 
									 <select name="issue" class="form-control">
                                        <option>&lt;--Choose Your Issue--&gt;</option>
                                        <option>Interface related issue</option>
                                        <option>Content related issue</option>
                                        <option>Service related issue</option>
                                        <option>Procedure issue</option>
                                        <option>Other</option>
                                  </select>
                                    <textarea class="form-control" name="description" id="comments" rows="6" placeholder="Description of your issue ...." required="true"></textarea>
                                    <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
                              </form>
                            </div>
                        </div>
					   </div>
                    </div><!-- end content -->
                    
                   <?php include("rightside.php");?>
                  </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->
      <?php include("footer2.php");?>
        
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/jquery.fitvids.js"></script>    
	<script src="js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
    <script src="js/fhmm.js"></script>
	<script src="js/bootstrap-select.js"></script>
    <script src="fancyBox/jquery.fancybox.pack.js"></script>
	<script src="js/application.js"></script>
</body>
</html>