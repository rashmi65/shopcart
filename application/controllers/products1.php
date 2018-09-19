<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products1 extends CI_Controller
{
    function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('product');
		$this->load->library('session');
		}
    
function buy(){ //paypal working for transcation 
		?>
		
<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr" target="paypal">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="amitesh.sharma-facilitator@gmail.com">
<input type="hidden" name="currency_code" value="USD">

<?php
$i = 1;
foreach ($this->cart->contents() as $item) 
 {
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
<input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
<input type="image" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" border="0" name="submit" width="87" height="23" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
		
<?php } } ?>
