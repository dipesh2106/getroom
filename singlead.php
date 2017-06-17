<?php
session_start();
if($_SESSION['e']=="")
{
	header("location: login.php");
	exit();
}
?>
<?php
session_start();
require_once("connection.php");
extract($_REQUEST);
$id=$_GET['id'];
$_SESSION['id']=$id;
$q=mysql_query("select * from advertisement where id='".$id."'");
$a=mysql_fetch_array($q);
$email=$a['email'];
$q1=mysql_query("select * from adphotos where email='".$email."'");
$a1=mysql_fetch_array($q1);
$q2=mysql_query("select * from siteregister where email='".$email."'");
$a2=mysql_fetch_array($q2);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM AD</title>

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
.cmn-toggle {
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}
.cmn-toggle + label {
  display: block;
  position: relative;
  cursor: pointer;
  outline: none;
  user-select: none;
}
input.cmn-toggle-round-flat + label {
  padding: 2px;
  width: 90px;
  height: 40px;
  background-color: #39ac39;
  border-radius: 60px;
  transition: background 0.4s;
}
input.cmn-toggle-round-flat + label:before,
input.cmn-toggle-round-flat + label:after {
  display: block;
  position: absolute;
  content: "";
}
input.cmn-toggle-round-flat + label:before {
  top: 2px;
  left: 2px;
  bottom: 2px;
  right: 2px;
  background-color: #fff;
  border-radius: 60px;
  transition: background 0.4s;
}
input.cmn-toggle-round-flat + label:after {
  top: 4px;
  left: 4px;
  bottom: 4px;
  width: 32px;
  background-color: #39ac39;
  border-radius: 52px;
  transition: margin 0.4s, background 0.4s;
}
input.cmn-toggle-round-flat:checked + label {
  background-color: #ff4d4d;
}
input.cmn-toggle-round-flat:checked + label:after {
  margin-left: 50px;
  background-color: #ff4d4d;
}
.style2 {
	font-size: 16px;
	color: #39ac39;
}
.style3 {
	font-size: 16px;
	color: #ff4d4d;
}
-->
</style>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBXTl6BLH7yXNM4Ge9PkG9T9dPeg8ZqV9E&sensor=false">
</script>
<script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
</script>
<script type="text/javascript">
            //Sample code written by August Li
            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/green-dot.png",
                       new google.maps.Size(32, 32), new google.maps.Point(0, 0),
                       new google.maps.Point(16, 32));		   
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map,
					animation: google.maps.Animation.DROP
                });
                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });
            }               
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(26.80917520, 75.80620940),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });
<?php
require_once("connection.php");
$query = mysql_query("select * from advertisement where id='".$id."'");
$row = mysql_fetch_array($query);
  $name = $row['title'];
  $lat = $row['latitude'];
  $lon = $row['longitude'];
  $desc = $row['description'];
  $ch = $row['choice'];
  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc');\n");
?>
 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
</head>
<body onLoad="initMap()">
      <?php include("header2.php");?>

        <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home</a></li>
                        <li>Property</li>
                    </ul>
                    <h2> <?php echo $row['title'];?></h2>
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
							<div class="boxes_img">
                                <div id="slider" class="flexslider clearfix">
                                    <ul class="slides">
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo1'];?>" alt=""></li>
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo2'];?>" alt=""></li>
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo3'];?>" alt=""></li>
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo4'];?>" alt=""></li> 
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider clearfix">
                                    <ul class="slides">
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo1'];?>" alt=""></li>
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo2'];?>" alt=""></li>
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo3'];?>" alt=""></li>
                                        <li><img class="img-thumbnail" src="<?php echo $a1['photo4'];?>" alt=""></li> 
                                    </ul>
                                </div>  
							</div><!-- boxes_img -->
                            
                            <hr>
                            
							<div class="title clearfix">
							    <span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="<?php echo $a2['first_name'];?> <?php echo $a2['last_name'];?>" title=""><img width="75" class="img-responsive img-thumbnail" src="<?php echo $a2['profilepath'];?>" alt=""></a></span>
                            	<h3> <?php echo $row['title'];?> 
                                <small><mark><i class="fa fa-inr"></i> <?php echo $row['price'];?></mark></small>
                                </h3>
							</div><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Category</strong><a> <?php echo $row['category'];?></a></span>
								<span class="sqft"><strong>Status</strong><a> <?php echo $row['status'];?></a></span>
								<span class="sft"><strong>Available</strong><a> <?php if($a['choice']=="" || $a['choice']=="On"){echo "Yes";}else{echo "No";}?></a></span>
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">

                                <p><?php echo $row['description'];?></p>
                            </div>
                                                   
                            <hr>
                            <div class="property_map clearfix">
                            	<h3 class="big_title">Property Address<small>Reach the place at address .... </small></h3>
                             	<a class="alert-success"><?php echo $row['address'];?></a>
                            </div>
							<hr>
                            <div>
                            	<h3 class="big_title">Property Map<small>Locate the address on the map</small></h3>
								 <div id="map" style="width:610px;height:500px;">
								 </div>
                            </div>
							<br>
							
							<div>
                              <h3 class="big_title">Status of your AD</h3>
								<br>
								<form action="<?php 
						   		extract($_REQUEST);
								if(isset($_POST['checkbox']))
								{
									if($row['choice']=='')
										{
											mysql_query("update advertisement set choice='".Off."' where id='".$id."'");
										}
									if($row['choice']=='Off')
										{
											mysql_query("update advertisement set choice='' where id='".$id."'");
										}
								}
						   ?>" method="post">
								 <table width="307">
									<td width="92"><span class="style2">Available</span></td>
									  <td width="95" align="center">
										<div class="switch">
										    <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" name="checkbox" value="Off" onChange="this.form.submit();" <?php echo ($row['choice']=='Off')?"checked":"" ;?>/>
										    <label for="cmn-toggle-4"></label>
									    </div>							
									</td>
								  <td width="120" align="right"><span class="style3">&nbsp;&nbsp;Unavailable</span></td>								
								 </table>
								</form>
                            </div>
						   
                        </div><!-- end property_wrapper -->                      
                    </div><!-- end content -->
					<?php include("rightside2.php");?>
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
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 122,
                itemMargin: 0,
                asNavFor: '#slider'
            });
       
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