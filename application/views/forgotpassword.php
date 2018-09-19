<?php include('header.php'); ?>
<!-- Modal3 -->
		<div>
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
									<?php if($this->session->flashdata('sendmail')){?>
    <?php echo $this->session->flashdata('sendmail')?>
 <?php } ?>
						<h3 class="agileinfo_sign">Forgot your <span>password?</span></h3>
								  <p class="danger"><?php echo @$error; ?></p>

		
						 <form action="<?php echo site_url('user/forgotpass'); ?>" method="post" onSubmit="Check();">
							
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							
							
							<input type="submit" value="Reset Password" name="forgotpass" onclick="Warn();">

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

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo base_url(); ?>images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<!-- //Modal3 content-->
			</div>
		</div>
		<?php include('footer.php'); ?>