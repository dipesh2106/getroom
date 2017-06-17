 <style type="text/css">
 #i i{
 	color:#19B8DF;
 }
 </style>
 <?php
 session_start();
 require_once("connection.php");
 $q=mysql_query("select * from siteregister where email='".$_SESSION['e']."'");
 $a=mysql_fetch_array($q);
 ?>
  <div class="toolbar-wrapp">
            <div class="sticky-toolbar">
                <ul>
                    <li id="contact"><a href="#ContactFormModal1" data-toggle="modal" title="Ask a question"><i class="fa fa-question"></i></a></li>
                    <li id="feedback"><a href="#FeedbackFormModal" data-toggle="modal" title="Feedback"><i class="fa fa-pencil-square-o"></i></a></li>
                </ul>
            </div><!--/ sticky-toolbar-->
        </div><!--/ toolbar-wrapp-->

<?php include("modal2.php");?>
		<div class="topbar clearfix">
        	<div class="container">
            	<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="callus">
                            <p>
                            <span><i class="fa fa-sign-out"></i><a href="index.php"> Logout</a></span>
                            </p>
                        </div><!-- end callus-->
				    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="marketing" id="i">
						   <ul class="topmenu pull-right">
						   <span><a><i class="fa fa-key"></i><a> Welcome <?php echo $a['first_name'];?></a></span>
						   </ul>
						  </li>	
						</div><!-- end marketing -->
                    </div>
                    <!-- end col-lg-6 -->
            	</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end topbar -->       
		 <header class="header1">
			<div class="container">
            	<div class="row header-row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="logo-wrapper clearfix">
							<div class="logo">
								<a href="index2.php" title="Home">
									<img src="images/logo.png" alt="Estate">
								</a>
						     </div><!-- /.site-name -->
						</div><!-- /.logo-wrapper -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">                    </div>      
                    <div class="col-lg-5 col-md-5 col-sm-12  pull-right">
                        <div class="social clearfix pull-right">
						<div class="fb-like" data-href="https://www.facebook.com/The-Puppet-Mafiaz-431958213634797/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                        </div><!-- end social -->
                    </div>     
                </div><!-- end row -->
                <nav class="navbar navbar-default fhmm" role="navigation">
                    <div class="menudrop container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div><!-- end navbar-header -->
                        <div id="defaultmenu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <!-- Mega Menu -->
                                <li class="dropdown fhmm-fw active"><a href="index2.php"><i class="fa fa-home"></i> HOME</a></li><!-- mega menu -->
                                <!-- list elements -->
                                <li><a href="about2.php">ABOUT US</a></li>
                                <!-- list elements -->
							    <li><a href="2explore.php">START EXPLORING</a></li>
                                <li><a href="advertisement.php">POST AN AD</a></li>
								<li><a href="feedback2.php">FEEDBACK</a></li>
                                <li><a href="contact2.php">CONTACT US</a></li>
								 <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> MORE OPTIONS <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="changeinfo.php">Change Personal Info</a></li>
                                        <li><a href="changepassword.php">Change Password</a></li>
                                        <li><a href="adslisted.php">List ADs</a></li>
                                    </ul><!-- end dropdown-menu -->
                                </li><!-- end standard drop down -->
                            </ul><!-- end nav navbar-nav -->
                        </div><!-- end #navbar-collapse-1 -->
                     </div><!-- end dm_container -->
                </nav>
                <!-- end navbar navbar-default fhmm -->
            </div><!-- end container -->
        </header><!-- end header -->
        