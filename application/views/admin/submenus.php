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
            <li class="breadcrumb-item active">Submenus</li>
          </ol>
<?php if($this->session->flashdata('submenu')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('submenu')?>
 </div>
 <?php } ?>
 <?php if($this->session->flashdata('updatesubmenu')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('updatesubmenu')?>
 </div>
 <?php } ?>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Submenus</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Serial</th>
					  <th>s_menu_id</th>
					  <th>m_menu_id</th>
					  <th>s_menu_name</th>
					  <th>s_menu_link</th>
					  <th>Action</th>

                    </tr>
                  </thead>
				  
                  <tfoot>
                    <tr>
                       <th>Serial</th>
					  <th>s_menu_id</th>
					  <th>m_menu_id</th>
					  <th>s_menu_name</th>
					  <th>s_menu_link</th>
					  <th>Action</th>
                    </tr>
                  </tfoot>
				 
                  <tbody>
				   
<?php   $cnt=1;
         foreach ($h as $row)  
         { 	$id = $row['s_menu_id'];
		 $id2 = $row['m_menu_id'];
				$name = $row['s_menu_name'];
				$link = $row['s_menu_link'];
            ?>				 
                    <tr>
					                     <td><?php echo $cnt;;?></td>

                      <td><?php echo $row['s_menu_id']?></td>  
            <td><?php echo $row['m_menu_id']?></td>  
			 <td><?php echo $row['s_menu_name']?></td>  
            <td><?php echo $row['s_menu_link']?></td>  
			<td><a href="<?php echo base_url()?>index.php/admin/editsub/<?php echo $id;?>"<i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<a  onclick="return confirm('Do you want to delete')" href="<?php echo base_url()?>index.php/admin/deletesub/<?php echo $id;?>" <i class="fa fa-trash fa-fw"></i></a></td>
                    </tr>
                     <?php  $cnt=$cnt+1;  }  
         ?>  
                  </tbody>
                </table>
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
