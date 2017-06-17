<?php
require_once("connection.php");
extract($_REQUEST);
if(isset($Submit))
{
mysql_query("insert into feedback set name='".$name."', email='".$email."', phone='".$phone."', feedback='".$feedback."'");
header("location: index.php");
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

	<title>GET ROOM Feedback</title>

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
      <?php include("header.php");?>
	   <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Feedback</li>
                    </ul>
                    <h2>Feedback</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<?php include("leftside.php");?>
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
					  <div class="property_wrapper boxes clearfix">
                    	<div class="modal-body clearfix">
                        <h3 class="big_title">Feedback <small>Your feedback means a lot to us.</small></h3>
						   <p> Please write whatever you feel about us. We will surely make efforts to satisfy you if you do have any problem.</p>
                            <hr>
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <form action="" method="post" name="feedbackform" class="row" id="contact">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="true"> 
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required="true"> 
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required="true"> 
                                    <textarea class="form-control" name="feedback" id="comments" rows="6" placeholder="Feedback ...." required="true"></textarea>
                                    <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
                               </form>
                            </div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								   <div class="ImageWrapper boxes_img">
                            		  <img src="demos/GR.jpg" class="img-responsive" alt="">
									    <div class="ImageOverlayH">
									    </div>
										  <div class="Buttons StyleSc">
											<span class="WhiteSquare"><a href="#"><i class="fa fa-facebook"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-twitter"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-envelope"></i></a></span>
										  </div>
								    </div>
                                <div class="servicetitle"><h3>Contact</h3>
								</div>
                                <ul>
								    <li><i class="fa fa-envelope"></i> getroomhere@gmail.com</li>
                            		<li><i class="fa fa-phone-square"></i> (+91) 9549645870</li>
                            	</ul>
                            </div>
                        </div>
					  </div>
                    </div><!-- end content -->
                    
                   <?php include("rightside.php");?>
                  </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->
      <?php include("footer.php");?>
        
    
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

 <script type="text/javascript">
 
    var locations = [
	['<div class="infobox agents_widget"><div class="agent clearfix"><div class="image"><img class="img-thumbnail img-responsive" src="demos/01_home.jpg" alt=""></div><div class="agent_desc"><h3 class="title"><a href="single-property.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
	    scrollwheel: false,
    	navigationControl: true,
		mapTypeControl: false,
		scaleControl: false,
		draggable: true,
		styles: [ { "stylers": [ { "hue": "#19B8DF" }, { "gamma": 1 } ] } ],
		center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
  
		marker = new google.maps.Marker({ 
		position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
		map: map ,
		icon: 'images/marker.png'
		});


      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  
</body>
</html>