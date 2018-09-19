<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('admin/adindex')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pages1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menus</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pages1">
            <a class="dropdown-item" href="<?php echo site_url('admin/addmenu')?>">Add Menu</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/admenu')?>">Manage Menu</a>
           
          </div>
        </li>
		   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pages2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Submenus</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pages2">
            <a class="dropdown-item" href="<?php echo site_url('admin/addsub')?>">Add Submenu</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/adsub')?>">Manage Submenu</a>
            
          </div>
        </li>
		  
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>
            <span>Products List</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/addproduct')?>">Add Products</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/adproduct')?>">Manage Products</a>
            
          </div>
        </li>
	<li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/aduser')?>">
 <i class="fas fa-fw fa-chart-area"></i>            
 <span>Registered User</span></a>
        </li>
			<li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/adorder')?>">
 <i class="fas fa-fw fa-chart-area"></i>            
 <span>Orders Details</span></a>
        </li>
       
      </ul>