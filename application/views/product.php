 <?php
			$i=1;
			 foreach($products as $product){

				$id = $product['serial'];
				$name = $product['name'];
				$description = $product['description'];
				$price = $product['price'];
				
?>
	
				<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo base_url(); ?><?php echo $product['picture']?>" alt="" class="pro-image-front">
										<img src="<?php echo base_url(); ?><?php echo $product['picture']?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												
												
												<a href="<?php echo base_url()?>index.php/product/get_productid/<?php echo $id;?>">quick cart</a>

												<!--<a href="<?php //echo base_url()?>index.php/welcome/index5/<?php //echo $product['serial']?>" class="link-product-add-cart">Quick View</a>-->
													
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
				<?php } ?>