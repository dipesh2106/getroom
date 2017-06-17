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

	<title>GET ROOM FAQs</title>

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
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home</a></li> 
                        <li>Frequently Asked Questions</li>
                    </ul>
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<?php include("leftside2.php");?>
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                     <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-desktop"></i> What is GET ROOM ??</a></h4>
                            </div><!-- end panel heading -->
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>GET ROOM is a place where you can find a perfect space for you to live in. You just need to Join us and search a perfect place for you, out of the millions of suggestions available here. Just go through the suggestions and list out all the places or properties you like and next step is to just contact the current owner of that place and just SEAL your DEAL. We provide a medium for people to interact and contact with others who are interested to buy or rent their properties. </p>
                                   
                                </div>
                            </div>
                        </div><!-- end panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-briefcase"></i> What services do we provide ??</a></h4>
                            </div><!-- end panel heading -->
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>We let people who want to sell or rent thier property or land to put their advertisement here. Next, the interested buyer or tenant can directly contact to the owner by the contact number so provided. Then they have to just seal the deal and make money.</p>
                                </div>
                            </div>
                        </div><!-- end panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-rss"></i> How do we provide services ??</a></h4>
                            </div><!-- end panel heading -->
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>If you are interested in selling or renting you property just register to our website and post an advertisement of the property including the description of the property, location, contact number and estimated price or rent. The interested users after looking to your advertisement can contact to you directly.</p>
                                </div>
                            </div>
                        </div><!-- end panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-home"></i> How do I post an AD ??</a></h4>
                            </div><!-- end panel heading -->
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Just register with your personal details and find the link to "Post an Ad" in the header menu. Click the link and fill in with the following details required about your property or land. Other users can simply review you Ad and contact you directly.</p>
                                </div>
                            </div>
                        </div><!-- end panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><i class="fa fa-bars"></i> How do I review an Ad ??</a></h4>
                            </div><!-- end panel heading -->
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>New or registered users can filter the properties according to their requirements. We have millions of suggestions available for you. Just look for a perfect place for and after finding that, just call the owner of that property and Seal the Deal.</p>
                                </div>
                            </div>
                        </div><!-- end panel -->       
                    </div><!-- panel-group -->
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