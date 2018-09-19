 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url('admin/adindex')?>">Welcome To The Admin Panel</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
		
          <div class="input-group-append">
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
       
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="<?php echo site_url('admin/admail')?>" id="messagesDropdown" role="button" >
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
        
        </li>
        <li class="nav-item dropdown arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-user-circle fa-fw"></i><span>Account<span class="caret"></span></span>

          </a>
		
              
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
           <a class="dropdown-item" href="<?php echo site_url('admin/adprofile')?>"> 
			<?php echo 'Admin Profile';  ?></a>
            <a class="dropdown-item" href="<?php echo site_url('admin/logout')?>"> 
			<?php echo 'Logout';  ?></a>
          </div>
        </li>
      </ul>

    </nav>