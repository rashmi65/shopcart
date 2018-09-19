<?php 
include 'header.php';
?>
<div class="container-fluid" style="margin:2em 8em 2em 8em">
<div class="row">
							<div class="col-md-12">
     	<div class="panel panel-default">
									<h1 class="panel-heading">Change Password</h1>
									<div class="panel-body">
                          
              
                   
<?php echo form_open('welcome/profilepasschange'); ?>
<?php  
                          echo '<label class="text-success">'.$this->session->flashdata

("success").'</label>';  
                     ?> 
                            
                     


					<span class="text-danger"><?php echo validation_errors(''); ?></span>
											<div class="form-group">
												<label class="col-sm-4 control-label">old Password </label>
												<div class="col-sm-8">
                                <input type="password" class="form-control"  name="currentpass" id="pass">

							</div>
											</div>
								
											<div class="form-group">
												<label class="col-sm-4 control-label">New Password</label>
												<div class="col-sm-8">
                                <input type="password" class="form-control"  name="password"  id="pass1">

											</div>
											</div>
									
<div class="form-group">
									<label class="col-sm-4 control-label">Confirm Password</label>

									<div class="col-sm-8">
					<input type="password"  class="form-control"  name="Confirm"  id="pass2">

												</div>
											</div>


												<div class="col-sm-8" style="margin:1em">
													<button class="btn btn-default" type="reset">Cancel</button>
                                <input type="submit" value="change password" class="btn btn-primary" name="changepass" id="change"  >
											</div>

<?php echo form_close(); ?>
								</div>
                   </div>
				   </div>
				   </div>
            
                           </div>  
						   </div>
<?php 
include 'footer.php';
?>						   