<br />
			<div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
                <div class="widget clearfix">
                        	<div class="search_widget">
                            	<center><h3><i class="fa fa-clone"></i>Want to remove your AD permanently ....</h3></center>
								<center>
								<a href="#Delete" data-toggle="modal"><button class="btn btn-danger">Delete</button></a>
								</center>
							</div><!-- end search_widget -->
                    </div><!-- end widget -->
					</div><!-- end sidebar -->
					
<?php
require_once("connection.php");
extract($_REQUEST);
if(isset($Submit))
{
	mysql_query("delete from advertisement where email='".$email."'");
	mysql_query("delete from adphotos where email='".$email."'");
	header("location: index2.php");
	exit();
}
?>					
					
					
		<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h3 class="big_title">Are you sure you want to remove this AD ???
                            <small>This action is permanent and irreversible.</small></h3></center>
                    </div>
                    <div class="modal-body clearfix">
                    	<div class="text-left">
                            <div>
                                <form id="delete" class="row" action="" method="post" name="formdelete">
								<center>
                                    <input type="submit" class="btn btn-danger" value="Confirm" name="Submit" />
									&nbsp;&nbsp;&nbsp;
									 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
								</center>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->