
<?php if (!$this->session->userdata('username'))
{
    //echo "Please Login";
	redirect('admin/login_validation');
}include ('header1.php'); ?>



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
            <li class="breadcrumb-item active">Edit product</li>
          </ol>
	<?php if($this->session->flashdata('editprod')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('editprod')?>
 </div>
 <?php } ?>
 
          <!-- Icon Cards-->
          <div class="row">
		  
        <div class="card-body">
		<h2>Edit A Product</h2>
		 	    <?php   $cnt=1;
         foreach ($h as $row)  
         { 	$id = $row['serial'];
				$name = $row['name'];
				$description = $row['description'];
				$price = $row['price'];
								$picture = $row['picture'];
								            $temp = explode(',',$row['picture'] );


            ?>
	<form action="<?php echo base_url()?>index.php/admin/updateproduct/<?php echo $id;?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="name" class="form-control" value="<?php echo $row['name']?>" placeholder="Product name" required="required" autofocus="autofocus">
                    <label for="firstName">Name</label>
                  </div>
                </div>
              
              </div>
         
            <div class="form-group">
			        <div class="col-md-6">
              <div class="form-label-group">
			             

                <input type="text" id="inputEmail" name="des" value="<?php echo $row['description']?>" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Category</label>
              </div>
			  </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="number" name="price" value="<?php echo $row['price']?>" class="form-control" placeholder="price" required="required">
                    <label for="inputPassword">price</label>
                 
                </div>
				</div>
				</div>
				  <div class="form-group">
                <div class="col-md-6">
				<div class="imagelocation<?php echo $row['serial'] ?>">

				<?php 
				$cnt=1;
			foreach($temp as $image){ ?>
<img src="<?php echo base_url(); ?>images/<?php echo $image; ?>" style="width:130px;height:50px;margin:1em">
<span style="cursor:pointer;" onclick="javascript:deleteimage(<?php echo $cnt; ?>)">X</span>
				
				<?php $cnt++; }  ?>
				</div>
                  <div class="form-label-group">
		<input name="userfile[]" id="userfile" type="file" multiple="" />

                  </div>
              </div>
            </div>
		<input class="btn btn-primary col-md-6" type="submit" value="Edit Product" name="save">

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

    <script type="text/javascript">
function deleteimage(image_id)
{
var answer = confirm ("Are you sure you want to delete from this picture?");
if (answer)
{
        $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/deleteimage');?>",
                data: "image_id="+image_id,
                success: function (response) {
                  if (response == 1) {
                    $(".imagelocation"+image_id).remove(".imagelocation"+image_id);
                  };
                  
                }
            });
      }
}
</script>

  </body>
<?php include ('footer1.php'); ?>

</html>
