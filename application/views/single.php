<?php 
include 'header.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>

<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Flat 40% <span>Discount </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="<?php echo site_url('welcome/index')?>">Home</a><i>|</i></li>
								<li>Flat 40% Discount</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->

	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<?php if($this->session->flashdata('message')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('message')?>
 </div>
 <?php } ?>
			<h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
 <?php
			$i=1;
			 foreach($products as $product){

				$id = $product['serial'];
				$name = $product['name'];
												$picture = $product['picture'];

				$description = $product['description'];
				$price = $product['price'];
				
					?>			
					  <div class="col-md-3 product-men single">
					  <br>
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo base_url(); ?>images/<?php echo $product['picture']?>" alt="" class="pro-image-front">
										<img src="<?php echo base_url(); ?>images/<?php echo $product['picture']?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo base_url()?>index.php/product/get_home/<?php echo $id;?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?php echo site_url('welcome/single')?>"><?php echo $name; ?></a></h4>
										<div class="info-product-price">
											<span class="item_price">&#x24;<?php echo $price; ?></span>
											<del>$189.71</del>
										</div>
											<?php
					echo form_open('cart1/adding');
					echo form_hidden('id', $id);
															echo form_hidden('picture', $picture);

					echo form_hidden('name', $name);
					echo form_hidden('price', $price);?>
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
					 <?php echo form_submit('action', 'Add to Cart',"class='button'");?>
					 </div>
					 <?php echo form_close();?>
																			
									</div>
								</div>
							</div>
							
                   <?php $i= $i+1; } ?>
						
					 
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->


</body>
</html>
<?php 
include 'footer.php';
?>