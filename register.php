<?php
session_start();
require_once("connection.php");
extract($_REQUEST);
$name=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$error=$_FILES['file']['error'];				
$_SESSION['user']=$fname;
if(!is_dir("admin/getroom_files") || !is_dir("admin/getroom_images")||!is_dir("admin/getroom_multimedia"))
{
	mkdir("admin/getroom_files");
	mkdir("admin/getroom_images");
	mkdir("admin/getroom_multimedia");
}
if(isset($Submit))
    {  
	   $q=mysql_query("select * from siteregister");
	   $a=mysql_fetch_array($q);
	   if($email==$a['email'])
	   {
	       $emailerror="Email ID you have entered already exists.";
	   }else
	   {
	        if($mobile==$a['mobile'])
	        {
	   		     $mobileerror="Mobile Number you have entered already exists.";
	        }else
			    { 
	                if($pass==$pass2)
		              { 
					  	if($captcha==$_SESSION['cap'])
						{
		   		        if($type=="image/jpeg" || $type=="image/png")
				           {
						     	$path="admin/getroom_images/".$name;	
				             	mysql_query("insert into siteregister set first_name='".$fname."', last_name='".$lname."', mobile='".$mobile."', email='".$email."', password='".$pass."', profilepath='".$path."'");
				            	move_uploaded_file($_FILES['file']['tmp_name'],$path);
				             	header("location:welcome.php");
								exit();
				           }	
		              }else{
					  			$caperror="Invalid Captcha.";
					  	   }
					  }else
		                   {
		                        $passerror="Password does not match.";
		                   }
				}
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

	<title>GET ROOM Register</title>

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
.style4 {color: #F6700E}
.style5 {
	color: #19B8DF;
	font-size: 18px;
}
.style6 {font-size: 18px}
-->
    </style>
	<style type="text/css">
#passwordStrength
{
        height:15px;
        display:block;
        float:left;
}
.strength0
{
        width:250px;
        background:#cccccc;
}
.strength1
{
        width:40px;
        background:#ff0000;
}
.strength2
{
        width:75px;
        background:#ff5f5f;
}
.strength3
{
        width:150px;
        background:#56e500;
}
.strength4
{
        background:#399800;
        width:200px;
}
.style8 {color: #F6700E; font-size: 16px;}
.style3 {
	font-size: 16px;
	color: #ff4d4d;
}
    </style>
<script>
<!--


function passwordStrength(password)
{
        var desc = new Array();
        desc[0] = "Very Weak";
        desc[1] = "Weak";
        desc[2] = "Better";
        desc[3] = "Good";
        desc[4] = "Strong";
        var score   = 0;

        //if password bigger than 10 give 1 point

        if (password.length > 2) score++;

        //if password has both lower and uppercase characters give 1 point

         if (password.length > 6) score++;

        //if password has at least one number give 1 point

        if (password.match(/d+/)) score++;

        //if password has at least one special caracther give 1 point

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

         document.getElementById("passwordDescription").innerHTML = desc[score];
         document.getElementById("passwordStrength").className = "strength" + score;
}
//-->
</script>
</head>
<body>
      <?php include("header.php");?>

        <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Register Form</li>
                    </ul>
                    <h2>REGISTER</h2>
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                  <?php include("leftside.php");?>
                    <div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="property_wrapper boxes clearfix">
							<center><h3 class="big_title"><span class="style4">Welcome</span><small>Register for a GET ROOM account.</small></h3>
							</center>
								<form action="" enctype="multipart/form-data" method="post" class="form-inline">
									<label for="fname">First Name</label>
                                 	<input type="text" id="fname" class="form-control" placeholder="First Name" name="fname" required="true">    
									<label for="lname">Last Name</label>
                                 	<input id="lname" type="text" class="form-control" placeholder="Last Name" name="lname" required="true">     
									<label for="fname">Mobile</label>
                                 	<input type="text" id="mobile" class="form-control" placeholder="Mobile" name="mobile" required="true" maxlength="10">    
									<label for="email">Email ID</label>
                                 	<input id="email" type="text" class="form-control" placeholder="Email ID" name="email" required="true"> 
									<label for="password">Password</label>
                                 	<input type="password" name="pass" id="pass" onKeyUp="passwordStrength(this.value)" class="form-control" required="true" data-container="body" data-toggle="popover" data-placement="right" data-content="Enter a combination of 8 digits, including 1 lower-case character, 1 upper-case character and 1 number.">
									<label for="conpassword">Confirm Password</label>
                                 	<input type="password" name="pass2" id="pass2" class="form-control" required="true"> 
									<p><label for="passwordStrength"><strong>Password strength:</strong></label></p>
                                    <div id="passwordDescription">Password not entered</div>
                                    <div id="passwordStrength" class="strength0"></div>
									<br><br><br>
									<center>
									<label>Profile Photo</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail"></div>
                                        <div>
                                        <span class="btn btn-primary btn-file">
                                            <span class="fileupload-new">Select Image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" name="file">
                                        </span>
                                        <a href="#" class="btn btn-primary fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                        </div>
								  </center>
									<br><br>
									<center>
									<div class="form-group">
										<label for="captcha">Confirm Captcha</label>
                                 	 </div>
									 <br>
									 <br>
									  <div class="form-group">   
									<img src="captcha.php"/>
									</div>
									<br><br>
									 <div class="form-group">   
								   <input type="text" name="captcha" id="captcha" class="form-control" required="true" placeholder="Confirm Captcha">
									</div>
									</center>
									<br><br>
									<center>
								   <input type="submit" class="btn btn-primary" name="Submit" value="REGISTER"></center>  
								   <br>
								   <br>
									<center><span class="style5">Already a member ??</span><a href="login.php" class="style6"> Login</a>
									</center>
									<br><br>
									<center>
									  <span class="style8"><?php echo $emailerror;?><?php echo $mobileerror;?><?php echo $caperror;?><?php echo $passerror;?></span>
									</center>                
								</form><!-- end search form -->
						</div><!-- end property_wrapper -->                
                    </div><!-- end content -->
                   <?php include("rightside.php");?>
                    
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