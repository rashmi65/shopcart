    <?php include ('header.php'); ?>


  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
		<?php  
                          echo '<label class="text-danger">'.$this->session->flashdata

("error").'</label>';  
                     ?>  
          <form method="post" action="<?php echo site_url('admin/login_validation')?>">  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" autofocus="autofocus">
                <label for="inputEmail">Username</label>
				<span class="text-danger"><?php echo form_error('username'); ?></span>                 
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                <label for="inputPassword">Password</label>
				      <span class="text-danger"><?php echo form_error('password'); ?></span>  
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  
                </label>
              </div>
            </div>

			<input type="submit" name="insert" value="Login" class="btn btn-primary btn-block" />  
			 
          </form>
          <div class="text-center">
            <a class="d-block small" href="<?php echo site_url('admin/adforgotpassword')?>">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <?php include ('footer.php'); ?>

  </body>

</html>
