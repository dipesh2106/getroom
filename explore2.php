<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM Explore</title>

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
		width:250px;
		height:170px;
		}
</style>
</head>
<body>
       <?php include("header.php");?>

        <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>                </div>
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home</a></li>
                        <li>Explore</li>
                    </ul>
                    <h2>Explore</h2>
                </div>
            </div>
        </section>
        <!-- end post-wrapper-top -->
      
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
				   <?php include("leftside.php");?>
                	<div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 clearfix">
                    	<div class="blog_container clearfix">
						      <?php
								require_once("connection.php");
								extract($_REQUEST);
								$status=$_GET['status'];
								$category=$_GET['category'];
								$q=mysql_query("select * from advertisement where status='".$status."' and category='".$category."'");
								while($a=mysql_fetch_array($q))
								{
								$email=$a['email'];
								$q1=mysql_query("select * from adphotos where email='".$email."'");
								$a1=mysql_fetch_array($q1);
								$q2=mysql_query("select * from siteregister where email='".$email."'");
								$a2=mysql_fetch_array($q2);
						      ?>
                           <div class="col-lg-4 col-md-4 col-sm-12">
                                <article class="blog-wrap boxes portfolio-wrap">
                                    <div class="blog-media">
									<div class="ImageWrapper boxes_img" id="main">
										<img class="img-responsive" src="<?php echo $a1['photo1'];?>" alt="">
										<div class="ImageOverlayH"></div>
                                        <div class="Buttons StyleMg">
                                            <span class="WhiteSquare"><a class="fancybox" href="<?php echo $a1['photo1'];?>"><i class="fa fa-search"></i></a></span>
                                            </div>
											<div class="box_type"><a><i class="fa fa-inr"></i></a> <?php echo $a['price'];?></div>
                                            <div class="status_type"><?php echo $a['status'];?></div>
                                        </div><!-- ImageWrappe>
                                    </div><!-- end blog media -->
                                    <div class="post-content"> <h2><a href="property.php?id=<?php echo $a['id'];?>"> <?php echo $a['title'];?></a></h2>
                                    </div><!-- post-content -->
                                </article><!-- end blog wrap -->
                            </div><!-- end col-lg-3 -->
								<?php
								}
								?>     
                        </div><!-- end row -->
                                      
						<div class="pagination_wrapper clearfix">
                            <!-- Pagination Normal -->
                            <ul class="pagination">
                              <li><a href="#"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li class="disabled"><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
        
                    </div><!-- end content -->
                  
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->

       <?php include("footer.php");?>
        
    
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
	<script src="js/bootstrap-fileupload.js"></script>
	<script src="js/application.js"></script>
 
</body>
</html>