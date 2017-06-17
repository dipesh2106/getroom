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
if(isset($Submit))
{
  $prepAddr = urlencode($address);
  $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
  $output= json_decode($geocode);
  $latitude = $output->results[0]->geometry->location->lat;
  $longitude = $output->results[0]->geometry->location->lng;
  mysql_query("insert into advertisement set email='".$_SESSION['e']."', title='".$title."', address='".$address."', description='".$description."', status='".$status."', category='".$category."', price='".$price."', latitude='".$latitude."', longitude='".$longitude."'");
  header("location:adphotos.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM Post an Ad</title>

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
<style>
#myMap {
   height: 350px;
   width: 680px;
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
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home</a></li>
                        <li>Post an Ad</li>
                    </ul>
                    <h2>Post an Advertisement</h2>
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                  <?php include("leftside2.php");?>
                    <div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="property_wrapper boxes clearfix">
							<h3 class="big_title">Advertise your property<small>Fill in the description of your property.</small></h3>
								<form action="" method="post" enctype="multipart/form-data" id="property_submit_form">
									<label for="title">Title</label>
                                 	<input type="text" id="title" class="form-control" placeholder="Title" name="title" >    
									<label for="address">Address</label>
                                 	<input id="address" type="text" class="form-control" placeholder="Address" name="address" >     
									<label for="description">Description</label>
                                 	<textarea class="form-control" id="description" rows="6" placeholder="Brief description of your property..." name="description" ></textarea>
                                    <label for="status">Status</label>
                                        <select id="status" class="show-menu-arrow selectpicker" name="status">
											<option value="For Rent">For Rent</option>
											<option value="For Sale">For Sale</option>
											<option value="For PG">For PG</option>
									    </select>
                                    <label for="type">Category</label>
                                        <select id="type" class="show-menu-arrow selectpicker" name="category">
											<option value="Family House">Family House</option>
											<option value="Rooms">Separate Rooms</option>
											<option value="Flats">Flats</option>
											<option value="Apartments">Apartments</option>
											<option value="Bunglows">Bunglows</option>
											<option value="Housing Board Flats">Housing Board Flats</option>
											<option value="Shop">Shop</option>
											<option value="Workshops">Workshops</option>
											<option value="Land">Land</option>
											<option value="Industry">Industry</option>
											<option value="Other">Other</option>
                                        </select> 
                                     	 <hr>  
										  <div class="row clearfix">  
                                        	<div class="col-lg-6 col-md-6 col-sm-12">                                   
                                    			<label>Estimated Price/Rent</label><br>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><a><i class="fa fa-inr"></i></a></span>
                                                    <input type="text" class="form-control" name="price">
                                                </div>
                                            </div>                                       
                                        </div><!-- end row -->
                                        <hr>
										 <div class="clearfix"></div>
                                        <hr>
										
										<center><input type="submit" class="btn btn-primary" name="Submit" valude="POST"></center> 
						  </form>  
						</div><!-- end property_wrapper -->                
                    </div><!-- end content -->
                   <?php include("rightside.php");?>
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->

       <?php include("footer2.php");?>
        
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
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
  
    <script src="js/jquery.geocomplete.js"></script>
    <script src="js/logger.js"></script>
      <script>
      $(function(){
        
        var options = {
          map: ".map_canvas"
        };
        
        $("#geocomplete").geocomplete(options)
          .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });
        
        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
        
        $("#examples a").click(function(){
          $("#geocomplete").val($(this).text()).trigger("geocode");
          return false;
        });
        
      });
    </script>
  </body>
</html>