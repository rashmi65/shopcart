<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<style>
.dropdown {
       white-space: nowrap;

}

.dropdown-content {
	
    display: none;
    position: left;
	margin:4px;
	 min-width: 140px;
    box-shadow: 0px 8px 12px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 11px 0px 5px 20px;
    text-decoration: none;
    font-size: 13px;
    display: block;
    text-transform: uppercase; 
}
.dropdown-content a:hover {background-color: #ddd;}


.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {color: #2fdab8;}
.log:hover .logout {color: #2fdab8;}

</style>
</head>
<body>
<!-- header -->
 <?php
   if($this->session->userdata('register'))
   {
   	?>
   	<div class="header" id="home">
	<div class="w3-bar w3-black">
    <div class="w3-dropdown-hover">
      <button class="w3-button"><span style="float:right"><?php echo $username = $this->session->userdata('name');?><span class="caret"></span></span></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="<?php echo site_url('welcome/profile')?>" class="w3-bar-item w3-button">profile</a>
        <a href="<?php echo site_url('welcome/order')?>" class="w3-bar-item w3-button">orders</a>
		<a href="<?php echo base_url(); ?>index.php/user/logout" class="w3-bar-item w3-button">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="<?php echo site_url('welcome/search')?>" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="<?php echo site_url('welcome/index')?>"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="<?php echo site_url('welcome/index')?>">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo site_url('welcome/about')?>">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="<?php echo site_url('welcome/men')?>"><img src="<?php echo base_url(); ?>images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/men')?>">Clothing</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Wallets</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Footwear</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Watches</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Accessories</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Bags</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/men')?>">Jewellery</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Perfumes</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Beauty</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Shirts</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/women')?>">Clothing</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Wallets</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Footwear</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Watches</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Accessories</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Bags</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/women')?>">Jewellery</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Perfumes</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Beauty</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Shirts</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="<?php echo site_url('welcome/women')?>"><img src="<?php echo base_url(); ?>images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="<?php echo site_url('welcome/webicons')?>">Web Icons</a></li>
									<li><a href="<?php echo site_url('welcome/typography')?>">Typography</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo site_url('welcome/contact')?>">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<!--<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="<?php echo site_url('cart/add')?>" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
		</div>
		</div>-->
	<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="margin-top: 8px;"> 
						
						<a href="<?php echo site_url('cart/add')?>"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size:25px; color: black">
						<sup>
						<span class="count"><?= $this->cart->total_items() ?></span></sup></i></a>
					   


					 

  
		</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<?php if(isset($msg)) { ?>
        <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
        <?php } ?>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
					<form action="<?php echo base_url(); ?>index.php/user/login" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
							
					</form>
					
						<?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->

<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						

						 <form action="<?php echo site_url('welcome/registeruser'); ?>" method="post" onSubmit="Check();">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="pass" class="password" id="password1" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password"  class="password" id="password2" name="pass" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up" name="save" onclick="Warn();">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				</div>
		</div>
<?php
}

else  if($this->session->userdata('userData')){
 ?>

 
 
 
 
 
 
  	<div class="header" id="home">
	<div class="w3-bar w3-black">
    <div class="w3-dropdown-hover">
      <button class="w3-button"><span style="float:right"><?php echo $userdata = @$userData['first_name'].' '.@$userData['last_name']; ?><span class="caret"></span></span></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="<?php echo site_url('welcome/profile')?>" class="w3-bar-item w3-button">profile</a>
        <a href="<?php echo site_url('welcome/order')?>" class="w3-bar-item w3-button">orders</a>
		<a href="<?php echo base_url(); ?>index.php/welcome/googlelogout" class="w3-bar-item w3-button">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="<?php echo site_url('welcome/search')?>" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="<?php echo site_url('welcome/index')?>"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="<?php echo site_url('welcome/index')?>">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo site_url('welcome/about')?>">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="<?php echo site_url('welcome/men')?>"><img src="<?php echo base_url(); ?>images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/men')?>">Clothing</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Wallets</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Footwear</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Watches</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Accessories</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Bags</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/men')?>">Jewellery</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Perfumes</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Beauty</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Shirts</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/women')?>">Clothing</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Wallets</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Footwear</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Watches</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Accessories</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Bags</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/women')?>">Jewellery</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Perfumes</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Beauty</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Shirts</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="<?php echo site_url('welcome/women')?>"><img src="<?php echo base_url(); ?>images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="<?php echo site_url('welcome/webicons')?>">Web Icons</a></li>
									<li><a href="<?php echo site_url('welcome/typography')?>">Typography</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo site_url('welcome/contact')?>">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<!--<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="<?php echo site_url('cart/add')?>" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
		</div>
		</div>-->
	<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="margin-top: 8px;"> 
						
						<a href="<?php echo site_url('cart/add')?>"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size:25px; color: black">
						<sup>
						<span class="count"><?= $this->cart->total_items() ?></span></sup></i></a>
					   


					 

  
		</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<?php if(isset($msg)) { ?>
        <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
        <?php } ?>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
					<form action="<?php echo base_url(); ?>index.php/user/login" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
							
					</form>
					
						<?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->

<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						

						 <form action="<?php echo site_url('welcome/registeruser'); ?>" method="post" onSubmit="Check();">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="pass" class="password" id="password1" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password"  class="password" id="password2" name="pass" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up" name="save" onclick="Warn();">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				</div>
		</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 



<?php
}

else{
 ?>






<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
			 <a href="<?php echo site_url('admin/adlogin')?>" style="float:right;text-align:end;width:0;margin:0em 0em 0em 0em">Admin</a>

		</ul>
	</div>

</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="<?php echo site_url('welcome/search')?>" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="<?php echo site_url('welcome/index')?>"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="<?php echo site_url('welcome/index')?>">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo site_url('welcome/about')?>">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="<?php echo site_url('welcome/men')?>"><img src="<?php echo base_url(); ?>images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/men')?>">Clothing</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Wallets</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Footwear</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Watches</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Accessories</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Bags</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/men')?>">Jewellery</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Perfumes</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Beauty</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Shirts</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/men')?>">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/women')?>">Clothing</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Wallets</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Footwear</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Watches</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Accessories</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Bags</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo site_url('welcome/women')?>">Jewellery</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Perfumes</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Beauty</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Shirts</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Sunglasses</a></li>
											<li><a href="<?php echo site_url('welcome/women')?>">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="<?php echo site_url('welcome/women')?>"><img src="<?php echo base_url(); ?>images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="<?php echo site_url('welcome/webicons')?>">Web Icons</a></li>
									<li><a href="<?php echo site_url('welcome/typography')?>">Typography</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo site_url('welcome/contact')?>">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<!--<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="<?php echo site_url('cart/add')?>" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
		</div>
		</div>-->
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="margin-top: 8px;"> 
						<a href="<?php echo site_url('cart/add')?>"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size:25px; color: black">
						<sup>
						<span class="count"><?= $this->cart->total_items() ?></span></sup></i></a>
					   
  
		</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<?php if(isset($msg)) { ?>
        <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
        <?php } ?>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
					<form action="<?php echo base_url(); ?>index.php/user/login" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">

<a href="<?php echo base_url(); ?>index.php/user/forgotpassword">forgot password?</a>
					</form>
					
						<?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
						
														<div class="clearfix"></div>
<br><a href="<?php echo $loginURL; ?>"><img src="<?php echo base_url().'images/glogin.png'; ?>" height="60px" width="250px"/></a>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->

<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						

						 <form action="<?php echo site_url('welcome/registeruser'); ?>" method="post" onSubmit="Check();">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="pass" class="password" id="password1" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password"  class="password" id="password2" name="pass" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up" name="save" onclick="Warn();">

						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php
}
?>
				<!-- //Modal content-->
			</div>
		</div>

<!-- //Modal2 -->


  
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