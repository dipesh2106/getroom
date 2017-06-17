<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GET ROOM</title>

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
			var icon2 = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/red-dot.png",
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
			function addMarker2(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon2,
                    map: map
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
$query = mysql_query("select * from advertisement");
while($row = mysql_fetch_array($query))
{
  $name = $row['title'];
  $lat = $row['latitude'];
  $lon = $row['longitude'];
  $desc = $row['description'];
  $ch = $row['choice'];
  if($ch == "")
  {
  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc');\n");
  }else
  {
  echo("addMarker2($lat, $lon, '<b>$name</b><br />$desc');\n");
  }
}

?>
 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
	 <style type="text/css">
<!--
.style3 {font-size: 14px}
-->
     </style>
</head>
<body onLoad="initMap()">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <?php include("header.php");?>
		<?php include("mainsection.php");?>

        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row text-center">
					<h3 class="big_title">To find the best suited place for you <small>You just need to Join us. </small></h3>
                    <div class="services_section clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="servicebox first">
                                <div class="service-icon">
                                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                        <a class=""> <i class="hovicon effect-1 sub-a fa fa-list fa-2x"></i> </a>
                                    </div>
                                </div>
                                <div class="servicetitle">
                                    <h3>List your Choices</h3>
                                </div>
                                <p>Search the places you want out of the numerous suggestions available...</p>
                            </div>
                        </div>
                                                
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="servicebox">
                                <div class="service-icon">
                                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                        <a class=""> <i class="hovicon effect-1 sub-a fa fa-eye-slash fa-2x"></i> </a>
                                    </div>
                                </div>
                                <div class="servicetitle">
                                    <h3>Detailed View.</h3>
                                </div>
                                <p>Review your choices in detail by looking at the available pictures...</p>
                            </div>
                        </div>
                                                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="servicebox">
                                <div class="service-icon">
                                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                        <a class=""> <i class="hovicon effect-1 sub-a fa fa-check-square-o fa-2x"></i> </a>
                                    </div>
                                </div>
                                <div class="servicetitle">
                                    <h3>Seal the Deal</h3>
                                </div>
                                <p>Just contact the owner of the place you want and get a confirmation of the deal... </p>
                            </div>
                        </div>
                                                                    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="servicebox last">
                                <div class="service-icon">
                                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                        <a class=""> <i class="hovicon effect-1 sub-a fa fa-home fa-2x"></i> </a>
                                    </div>
                                </div>
                                <div class="servicetitle">
                                    <h3>Move into the new space.</h3>
                                </div>
                                <p>Just move into the new space and live your life happily out there...</p>
                            </div>
                        </div>
                    </div><!-- services_section -->  
                </div><!-- end row -->
                    <div class="text-center clearfix">
                    	<a class="btn btn-primary" href="explore.php">Explore It All</a>
                    </div><!-- end text-center -->
            </div><!-- end container -->
		</section><!-- end generalwrapper -->

		<section id="three-parallax" class="parallax" style="background-image: url('demos/02_Parallax.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="threewrapper">
                <div class="overlay1 dm-shadow">
                    <div class="container">
					<div class="row">
                        	<div class="text-center clearfix">
                            	<h3 class="big_title">Explore the Places<small>All the available places displayed .... </small></h3>
                            </div><!-- text-center -->
                    <div id="map" style="width:1170x;height:500px;"></div>
					</div>
                    </div><!-- end container -->
                </div><!-- end overlay1 -->
            </div><!-- end threewrapper -->
        </section><!-- end parallax -->
                  
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                  <?php include("leftside.php");?>
                	<?php include("mainsection2.php");?>
				  <?php include("rightside.php");?>
				</div><!-- end row -->
            </div><!-- end dm_container -->  
        </section><!-- end generalwrapper -->
  
         <?php include("reviews.php");?>
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
	<script src="js/application.js"></script>
    
	<!-- FlexSlider JavaScript
    ================================================== -->
 	<script src="js/jquery.flexslider.js"></script>
	<script>
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 114,
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
            
            $('#property-slider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 6000,
                animationSpeed:	1300,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });
        });
    </script>

</body>
</html>