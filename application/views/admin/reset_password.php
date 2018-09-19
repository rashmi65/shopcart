        <?php

include ('header1.php'); ?>


  <body id="page-top">


    <div id="wrapper">

      <!-- Sidebar -->

      <div id="content-wrapper">

        <div class="container-fluid">

      
		  
				<div class="row">
					<div class="col-md-12">
					
	
				
						
							
								<div class="col-md-6">
								<div class="panel panel-default">
									<h1 class="panel-heading">Change Password</h1>
									<div class="panel-body">

<?php echo form_open('admin/adpasschange'); ?>
<?php  
                          echo '<label class="text-success">'.$this->session->flashdata

("success").'</label>';  
                     ?> 
					<span class="text-danger"><?php echo validation_errors(''); ?></span>
									
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



												<div class="col-sm-8 col-sm-offset-4">
													<button class="btn btn-default" type="reset">Cancel</button>
                                <input type="submit" value="change password" class="btn btn-primary" name="changepass" id="change"  >
			 <a href="<?php echo site_url('admin/adlogin')?>">Login Now</a>
										</div>

<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>       
		</div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo site_url('welcome/admin')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

            <?php include ('footer1.php'); ?>


  </body>

</html>
