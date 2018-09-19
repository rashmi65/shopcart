
<?php 
include 'header.php';
?>
<style>
#div2 {
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 5px #888888;
}
</style>
  <!-- //mainfile// -->
<body class="inner-page">
    <div class="page">
    	<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Your <span> Orders </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="<?php echo site_url('welcome/index')?>">Home</a><i>|</i></li>
								<li>Order</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /banner_bottom_agile_info -->
      
        <div class="content" id="div2" style="margin:6em 6em 6em 6em;">
<h1 align="center" style="margin:1em 1em 1em 1em">Your order detail is here</h1>

<table  class="display" style="margin:1em 1em 1em 1em;width:97%" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
	
    <th>txn_id</th>
    <th>price</th>
	    <th>currency_code</th>
			    <th>payment_status</th>


  </tr>
  <?php
  $i=1;
 
  foreach($records as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
    
  echo "<td>".$row->txn_id."</td>";
  echo "<td>".$row->payment_gross."</td>";
  echo "<td>".$row->currency_code."</td>";
  echo "<td>".$row->payment_status."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
        </div>
    </div>

  
</body>

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/account_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Apr 2018 06:25:11 GMT -->
</html>

	<?php 
include 'footer.php';
?>