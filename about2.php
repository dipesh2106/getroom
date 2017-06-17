<?php
session_start();
if($_SESSION['e']=="")
{
	header("location: login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>About GET ROOM</title>

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
<style type="text/css">
#main img{
	width:700px;
	height:420px;
}
</style>
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
                        <li>About Us</li>
                    </ul>
                    <h2>About Us</h2>
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
							<div class="boxes_img" id="main">
                                <div id="slider" class="flexslider clearfix">
                                    <ul class="slides">
										<?php
										require_once("connection.php");
										extract($_REQUEST);
										$q=mysql_query("select * from adphotos order by id desc limit 8");
										while($a=mysql_fetch_array($q))
										{
										?>
                                        <li><img class="img-thumbnail" src="<?php echo $a['photo1'];?>" alt=""></li>
                                       	<?php
										}
										?> 
                                    </ul>
                                </div>
							</div><!-- boxes_img -->

                            <hr>
                            
							<div class="title clearfix">
                            	
                            	<h3>Welcome to GET ROOM 
                                <small class="small_title">Stop Knocking. Start Searching</small>
                                </h3>
							</div><!-- end title -->

                            <div class="property_desc clearfix">

                                <p>We here at GET ROOM helps you to find a perfect place for you to live in, with minimal efforts. We facilitates you to search for the place in your desired location by just sitting at your place and using your laptop or phone. By using GET ROOM you can search for the required place to live without going door to door and asking for space to stay. We are here to lessen your efforts of knocking different doors. We are here at you service. </p>
                                
                                <p>Now a days finding a place for rent is one of the hardest job to do. People have to knock away different doors to ask for a room on rent. This annoys both the tenants and the owner of the houses. People gets so annoyed of the continous knocks on their doors. They just want a space where they can easily find a place to live and be happy and satisfied in. It is where we get into work.</p>
                                
                                <p>We basically want people to stay freely at there place and easily search for a new place to live in. Those who want to lend their room for rent, can upload their Ad and fill in with their details including contact number, address, photos of their room and estimated rent. Those who want a place for rent can contact the Owner by reviewing their Ads and dealing with the Owner personally.</p>
                              
                            </div>
                        </div><!-- end property_wrapper -->
                    </div><!-- end content -->
                   <?php include("rightside.php");?>
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->
       <?php include("footer2.php");?>
        
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
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
    
	<!-- FlexSlider JavaScript
    ================================================== -->
 	<script src="js/jquery.flexslider.js"></script>
	<script>
        $(window).load(function() {
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                sync: "#carousel"
            });
        });
    </script>
  
</body>
</html>