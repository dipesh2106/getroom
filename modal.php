<?php 
require_once("connection.php");
extract($_REQUEST);
if(isset($Submit1))
{
mysql_query("insert into contact set name='".$name."', email='".$email."', phone='".$phone."', issue='".$issue."', description='".$description."'");
}else if(isset($Submit2))
{
mysql_query("insert into feedback set name='".$name."', email='".$email."', phone='".$phone."', feedback='".$feedback."'");
}
?>

<div class="modal fade" id="ContactFormModal1" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="big_title">Do you have any questions?
                            <small>We're here to help you</small>                        </h3>
                    </div>
                    <div class="modal-body clearfix">
                    	<div class="text-left">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="ImageWrapper boxes_img">
                            		<img src="demos/GR.jpg" class="img-responsive" alt="">
									<div class="ImageOverlayH"></div>
										<div class="Buttons StyleSc">
											<span class="WhiteSquare"><a href="#"><i class="fa fa-facebook"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-twitter"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-envelope"></i></a></span>										
								        </div>
								</div>
                                <div class="servicetitle"><h3>Contact</h3></div>
                                <ul>
                                    <li><i class="fa fa-envelope"></i> getroomhere@gmail.com</li>
                            		<li><i class="fa fa-phone-square"></i> (+91) 9549645870</li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <form action="" method="post" class="row" id="contact">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone"> 
									 <select name="select" class="form-control">
                                        <option>&lt;--Choose Your Issue--&gt;</option>
                                        <option>Interface related issue</option>
                                        <option>Content related issue</option>
                                        <option>Service related issue</option>
                                        <option>Procedure issue</option>
                                        <option>Other</option>
                                  </select>
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Description of your issue ...."></textarea>
                                    <input type="submit" class="btn btn-primary" value="Submit" name="Submit1"/>
                              </form>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		
        <div class="modal fade" id="FeedbackFormModal" tabindex="-1" role="dialog" aria-labelledby="FeedbackFormModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h3 class="big_title">Feedback <small>Your feedback means a lot to us.</small></h3>
						   <p> Please write whatever you feel about us. We will surely make efforts to satisfy you if you do have any problem.</p>
                            <hr>
					</div>
                    <div class="modal-body clearfix">
                    	<div class="text-left">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="ImageWrapper boxes_img">
                            		<img src="demos/GR.jpg" class="img-responsive" alt="">
									<div class="ImageOverlayH"></div>
										<div class="Buttons StyleSc">
											<span class="WhiteSquare"><a href="#"><i class="fa fa-facebook"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-twitter"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-envelope"></i></a></span>										
								        </div>
								</div>
                                <div class="servicetitle"><h3>Contact</h3></div>
                                <ul>
                                    <li><i class="fa fa-envelope"></i> getroomhere@gmail.com</li>
                            		<li><i class="fa fa-phone-square"></i> (+91) 9549645870</li>
                                </ul>
                            </div>
                            
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <form action="" method="post" class="row" id="contact">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone"> 
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Feedback ...."></textarea>
                                    <input type="submit" class="btn btn-primary" value="Submit" name="Submit2"/>
                             </form>
                          </div>
                        </div>
                    </div>
				</div>
				<!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->