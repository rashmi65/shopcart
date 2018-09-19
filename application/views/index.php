
<?php 
include 'header.php';
?>

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="<?php echo site_url('welcome/women')?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="<?php echo site_url('welcome/men')?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="<?php echo site_url('welcome/women')?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="<?php echo site_url('welcome/women')?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="<?php echo site_url('welcome/men')?>">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?php echo base_url(); ?>images/bottom1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?php echo base_url(); ?>images/bottom2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	<!-- schedule-bottom -->
	<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="<?php echo base_url(); ?>images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Save up to <span>50%</span> in this week</h3>
				<p>Suspendisse varius turpis efficitur erat laoreet dapibus. 
					Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>

			
		
			<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					 <?php  foreach($result as $row)
  {?>    
					<h5 class="counter">
						 
 <?php 
 foreach ($row as $t) {
    // Do the stuff

print_r($t);

 }
  }
?>
					</h5>
				</div>

				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter">823</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter">45</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>
	
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="<?php echo site_url('welcome/women')?>">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="<?php echo base_url(); ?>images/bb1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="<?php echo site_url('welcome/men')?>">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="<?php echo base_url(); ?>images/bottom3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="<?php echo site_url('welcome/men')?>">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="<?php echo base_url(); ?>images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 65%</p>
							</figcaption>		
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="<?php echo site_url('welcome/women')?>"><img src="<?php echo base_url(); ?>images/bot_1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
					
			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="<?php echo site_url('welcome/men')?>"><img src="<?php echo base_url(); ?>images/bot_2.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Men's</li>
							<li> Women's</li>
							<li> Bags</li>
							<li> Footwear</li>
						</ul>
<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
						<?php
			$i=1;
			 foreach($products as $product){

				$id = $product['serial'];
				$name = $product['name'];
												$picture = $product['picture'];

				$description = $product['description'];
				$price = $product['price']; ?>
							<div class="col-md-3 product-men">
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
											<del>$69.71</del>
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
						</div>
							<div class="tab2">
						<?php
			$i=1;
			 foreach($wo as $product){

				$id = $product['serial'];
				$name = $product['name'];
																$picture = $product['picture'];

				$description = $product['description'];
				$price = $product['price']; ?>
							<div class="col-md-3 product-men">
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
											<del>$69.71</del>
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
						</div>
							<div class="tab3">
						<?php
			$i=1;
			 foreach($bag as $product){

				$id = $product['serial'];
				$name = $product['name'];
																$picture = $product['picture'];

				$description = $product['description'];
				$price = $product['price']; ?>
							<div class="col-md-3 product-men">
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
											<del>$69.71</del>
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
						</div>
							<div class="tab4">
						<?php
			$i=1;
			 foreach($foot as $product){

				$id = $product['serial'];
				$name = $product['name'];
																$picture = $product['picture'];

				$description = $product['description'];
				$price = $product['price']; ?>
							<div class="col-md-3 product-men">
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
											<del>$69.71</del>
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
						</div>
							<div class="clearfix"></div>
</div>
				
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="<?php echo site_url('welcome/single')?>">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
<?php 
include 'footer.php';
?>
