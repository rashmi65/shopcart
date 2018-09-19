
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
            <li class="breadcrumb-item active">Edit submenu</li>
          </ol>
	<?php if($this->session->flashdata('editsubmenu')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('editsubmenu')?>
 </div>
 <?php } ?>
 
          <!-- Icon Cards-->
          <div class="row">
		  <?php   $cnt=1;
         foreach ($h as $row)  
         { 	$id = $row['s_menu_id'];
		 $id2 = $row['m_menu_id'];
				$name = $row['s_menu_name'];
				$link = $row['s_menu_link'];
            ?>		
        <div class="card-body">
		<h2>Edit submenu</h2>
	<form action="<?php echo site_url('admin/updatesubmenu'); ?>/<?php echo $id;?>" method="post"  enctype="multipart/form-data">
 <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="number" value="<?php echo $row['m_menu_id']?>"name="m_menu_id" class="form-control" placeholder="menuid" required="required">
                    <label>Menu Id</label>
                 
                </div>
				</div>
				</div>          
		  <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" value="<?php echo $row['s_menu_name']?>" class="form-control" name="s_menu_name" placeholder="Product name" required="required" autofocus="autofocus">
                    <label for="firstName">Submenu name</label>
                  </div>
                </div>
              
              </div>
         
            <div class="form-group">
			        <div class="col-md-6">
              <div class="form-label-group">
			             

                <input type="text" id="inputEmail" value="<?php echo $row['s_menu_link']?>"name="s_menu_link" class="form-control" placeholder="Email address">
                <label for="inputEmail">Submenu link</label>
              </div>
			  </div>
            </div>           
		   
           
				 
		<input class="btn btn-primary col-md-6" type="submit" value="Edit submenu" name="save">

          </form>
		   <?php } ?>
        
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
