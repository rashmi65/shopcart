
<?php if (!$this->session->userdata('username'))
{
    //echo "Please Login";
	redirect('admin/login_validation');
} include ('header1.php'); ?>



  <body id="page-top">

   <?php include ('nav.php'); ?>


    <div id="wrapper">
<?php include ('sidebar.php'); ?>

      

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add product</li>
          </ol>
	<?php if($this->session->flashdata('adprod')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('adprod')?>
 </div>
 <?php } ?>
          <!-- Icon Cards-->
          <div class="row">
		  
        <div class="card-body">
		<h2>Add A Product</h2>
	<form action="<?php echo site_url('admin/doupload'); ?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" value="<?php echo set_value('name'); ?>"class="form-control" name="name" placeholder="Product name"  autofocus="autofocus">
                    <label for="firstName">Name</label>
									<span class="text-danger"><?php echo form_error('name'); ?></span>                 

                  </div>
                </div>
              
              </div>
         
            <div class="form-group">
			        <div class="col-md-6">
              <div class="form-label-group">
			             

                <input type="text" id="inputEmail" name="des"value="<?php echo set_value('des'); ?>" class="form-control" placeholder="Email address" >
                <label for="inputEmail">Category</label>
								<span class="text-danger"><?php echo form_error('des'); ?></span>                 

              </div>
			  </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="number" name="price"value="<?php echo set_value('price'); ?>" class="form-control" placeholder="price">
                    <label for="inputPassword">price</label>
									<span class="text-danger"><?php echo form_error('price'); ?></span>                 

                 
                </div>
				</div>
				</div>
                <div class="col-md-6">
				<input name="userfile[]" id="userfile" type="file" multiple="" />

                    <!--<input type="file" name="file" >-->
									<span class="text-danger"><?php echo form_error('file'); ?></span>                 

           </div><br>
		<input class="btn btn-primary col-md-6" type="submit" value="Add Product" name="save">

          </form>
        
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
            <a class="btn btn-primary" href="<?php echo site_url('admin/adlogin')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    
  </body>
<?php include ('footer1.php'); ?>

</html>
