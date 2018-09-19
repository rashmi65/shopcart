 <?php 
include 'header.php';
?>
<style>
#order{
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 5px #888888;
}
</style>
	<div align="center" id="order" style="margin:4em 10em 4em 10em;">
	<h1>Your details saved successfully</h1>
	<h2>To proceed for order complete the payment using paypal</h2>
<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="amitesh.sharma-facilitator@gmail.com">
<input type="hidden" name="currency_code" value="USD">

<?php
$i = 1;
foreach ($this->cart->contents() as $item) 
 {
	 //echo "<pre>";
	 //print_r($item);
	 //echo "</pre>";

	?>

<input type="hidden" name="item_name_<?php echo $i ?>" value="<?php echo $item['name'];?>">
<input type="hidden" name="item_number_<?php echo $i ?>" value="00<?php echo $i ?>">
<input type="hidden" name="amount_<?php echo $i ?>" value="<?php echo $item['subtotal'];?>">
<input type="hidden" name="quantity_<?php echo $i ?>" value="1">
        <input type='hidden' name='cancel_return' value="http://localhost/index.php/paypal/cancel">
        <input type='hidden' name='return' value="<?php echo base_url(); ?>index.php/paypal/success">
		      
<?php
    $i++;
}
?>

<input type="submit" name="submit" class="btn btn-primary" value="Place Order">
  
</form>
</div>
<?php 
include 'footer.php';
?>