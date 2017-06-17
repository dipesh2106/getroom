<?php
session_start();
require_once("connection.php");
extract($_REQUEST);
session_start();
if($_SESSION['e']=="")
{
	header("location: login.php");
	exit();
}
if(!is_dir("admin/getroom_photos"))
{
	mkdir("admin/getroom_photos");
}
if(isset($Submit)) 
{
		$type1=$_FILES['file1']['type'];
		$type2=$_FILES['file2']['type'];
		$type3=$_FILES['file3']['type'];
		$type4=$_FILES['file4']['type'];
		$name1=$_FILES['file1']['name'];
		$name2=$_FILES['file2']['name'];
		$name3=$_FILES['file3']['name'];
		$name4=$_FILES['file4']['name'];
		if($type1=="image/jpeg" || $type1=="image/png" || $type1== "image/jpg" && $type2=="image/jpeg" || $type2=="image/png" || $type2 == "image/jpg" && $type3=="image/jpeg" || $type3=="image/png" || $type3== "image/jpg" && $type4=="image/jpeg" || $type4=="image/png" || $type4== "image/jpg")
			{
		        $path1 = "admin/getroom_photos/".$name1;
				$path2 = "admin/getroom_photos/".$name2;
				$path3 = "admin/getroom_photos/".$name3;
				$path4 = "admin/getroom_photos/".$name4;
				mysql_query("insert into adphotos set email='".$_SESSION['e']."', photo1='".$path1."', photo2='".$path2."', photo3='".$path3."', photo4='".$path4."'");
		        move_uploaded_file($_FILES['file1']['tmp_name'], $path1);
				move_uploaded_file($_FILES['file2']['tmp_name'], $path2);
				move_uploaded_file($_FILES['file3']['tmp_name'], $path3);
				move_uploaded_file($_FILES['file4']['tmp_name'], $path4);
				header("location:thankyou.php");
			 	exit();
			}	
}																
?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM Upload Photos</title>

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
                    <span class="s1"></span>                </div>
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home</a></li>
                        <li>Post an Ad</li>
                    </ul>
                    <h2>Upload Photos</h2>
                </div>
            </div>
        </section>
        <!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<?php include("leftside2.php");?>
					 <div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="property_wrapper boxes clearfix">
						   <center>
							<h3 class="big_title">Show us your place.<small>Upload the photos of your property.</small></h3>
							     </center>
								 <br>
								 <form action="" enctype="multipart/form-data" method="post">
								 <center>
								 <label>Upload Photo 1</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"></div>
                                        <div>
                                        <span class="btn btn-darkblue btn-file">
                                            <span class="fileupload-new">Select Image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" name="file1">
                                        </span>
                                        <a href="#" class="btn btn-darkblue fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                        </div>
										<label>Upload Photo 2</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"></div>
                                        <div>
                                        <span class="btn btn-darkblue btn-file">
                                            <span class="fileupload-new">Select Image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" name="file2">
                                        </span>
                                        <a href="#" class="btn btn-darkblue fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                        </div>
										<label>Upload Photo 3</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"></div>
                                        <div>
                                        <span class="btn btn-darkblue btn-file">
                                            <span class="fileupload-new">Select Image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" name="file3">
                                        </span>
                                        <a href="#" class="btn btn-darkblue fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                        </div>
										<label>Upload Photo 4</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"></div>
                                        <div>
                                        <span class="btn btn-darkblue btn-file">
                                            <span class="fileupload-new">Select Image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" name="file4">
                                        </span>
                                        <a href="#" class="btn btn-darkblue fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                        </div>
										</center>
								 <br>
								 <hr>
						    <center><input type="submit" class="btn btn-primary" name="Submit" value="UPLOAD"></center> 
							</form>
						</div><!-- end property_wrapper -->                
                    </div><!-- end content -->
                    
                   <?php include("rightside.php");?>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end generalwrapper -->

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
	<script src="js/bootstrap-fileupload.js"></script>
	<script src="js/application.js"></script>
 
</body>
</html>