    <?php include ('header.php'); ?>


  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
		  <?php echo @$error; ?>
<?php if($this->session->flashdata('sendmail')){?>
    <?php echo $this->session->flashdata('sendmail')?>
 <?php } ?>
            <h4>Forgot your password?</h4>
          </div>
<form method="post" action="<?php echo site_url('admin/forgotpass')?>">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="name" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
			<input type="submit" class="btn btn-primary btn-block" value="Reset Password" name="forgotpass"/>
            <!--<a class="btn btn-primary btn-block" href="<?php //echo site_url('admin/adlogin')?>">Reset Password</a>-->
          </form>
          <div class="text-center">
            <a class="d-block small" href="<?php echo site_url('admin/adlogin')?>">Login</a>
          </div>
        </div>
      </div>
    </div>
    <?php include ('footer.php'); ?>

  </body>

</html>
