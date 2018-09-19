        <?php
if (!$this->session->userdata('username'))
{
    //echo "Please Login";
	redirect('admin/login_validation');
}		include ('header1.php'); ?>


  <body id="page-top">

           <?php include ('nav.php'); ?>

    <div id="wrapper">

      <!-- Sidebar -->
             <?php include ('sidebar.php'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Admin profile</li>
          </ol>

		  
				<div class="row">
					<div class="col-md-12">
					
	
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<h1 class="panel-heading">Admin profile details</h1>
									<div class="panel-body">
								<?php	foreach($users as $user) 
      { ?>
	  <?php if($this->session->flashdata('updateprofile')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('updateprofile')?>
 </div>
 <?php } ?>
<?php echo form_open('admin/updateprofile'); ?>
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Username </label>
												<div class="col-sm-10">
													<input type="text" value="<?php  echo $user->username;  ?>
" disabled class="form-control"><span class="help-block m-b-none">
													Username can't be changed.</span> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Email</label>
												<div class="col-sm-10">
	<input type="email" class="form-control" name="email" id="emailid" value="<?php  echo $user->email;  ?>" required="required">
						 
												</div>
											</div>
<div class="form-group">
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<input class="btn btn-primary" type="submit" name="update" value="Update Profile">
												</div>
											</div>
<?php echo form_close(); ?>

	  <?php } ?>
									</div>
								</div>
							
								<div class="col-md-6">
								<div class="panel panel-default">
									<h1 class="panel-heading">Change Password</h1>
									<div class="panel-body">

<?php echo form_open('admin/adprofile'); ?>
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



												<div class="col-sm-8 col-sm-offset-4">
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
		</div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © shopcart 2018</span>
            </div>
          </div>
        </footer>

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
