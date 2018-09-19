    <?phpif (!$this->session->userdata('username'))
{
    //echo "Please Login";
	redirect('admin/login_validation');
} include ('header.php'); ?>


  <body class="bg-dark">

    <div align="center">

      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
	<form action="<?php echo site_url('welcome/savingdataad'); ?>" method="post" onSubmit="Check();">
            <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" name="name" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">Name</label>
                  </div>
                </div>
              
              </div>
         
            <div class="form-group">
			        <div class="col-md-6">
              <div class="form-label-group">
			             

                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>
			  </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password"  id="password1" name="pass" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                 
                </div>
				</div>
				</div>
				  <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="password2" name="pass" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
              </div>
            </div>
		<input class="btn btn-primary col-md-6" type="submit" value="Register" name="save">
		<br><a href="<?php echo site_url('admin/login')?>">Back</a>

          </form>
        
        </div>
      </div>
    </div>

        <?php include ('footer.php'); ?>

<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
     function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
		}
	</script>

  </body>

</html>
