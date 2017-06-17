<?php
session_start();
require_once("connection.php");
extract($_REQUEST);
$em=$_SESSION['email'];
if(isset($Submit))
{    
	   if($password==$conpassword)
	   {
	   		mysql_query("update siteregister set password='".$password."' where email='".$em."'");
	    	header("location:thankyou2.php");
			exit();
	   }
	        $err="Passwords does not match.";
	   
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM Update</title>

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
<!--
.style1 {
	font-size: 16px;
	color: #F89146;
}
.style3 {font-size: 18px; color: #19B8DF; }
.style4 {font-size: 18px}
-->
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
                        <li><a href="index.php">Home</a></li>
                        <li>Update Password</li>
                    </ul>
                    <h2>UPDATE PASSWORD</h2>
                </div>
            </div>
        </section>
        <!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<?php include("leftside.php");?>
                    <div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">   
                    	<div class="property_wrapper boxes clearfix">
							<center><h3 class="big_title"><span class="style4">Update Password ???</span></span><small>Set up a new password for your account.</small></h3>
							</center>
						  	 <form action="" method="post" class="form-inline">
									<label for="fname">Password</label>
                                 	<input id="password" type="password" class="form-control" placeholder="Password" name="password" required="true">    
									<label for="lname">Confirm Password</label>
                                 	<input id="newpassword" type="password" class="form-control" placeholder="Confirm Password" name="conpassword" required="true">     
									<br>
                                    <br>
                                    <center><input type="submit" class="btn btn-primary" name="Submit" value="SUBMIT"></center> 
						 	 </form><!-- end search form -->
									<br>
                                    <br>
							<center><span class="style1"><?php echo $err;?></span></center>  
						</div><!-- end property_wrapper -->                
                    </div><!-- end content -->
                   <?php include("rightside.php");?>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end generalwrapper -->

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