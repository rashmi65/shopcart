<?php
//session_start();

?>

<h2>Dear 

user id:-
<?php echo $user_id;?></h2>
<p>Your payment was successful, thank you for purchase.</p>
<p>TXN ID : <b><?php echo $txn_id; ?></b></p>
<p>Amount Paid : <b>$<?php echo $payment_gross.' '.$currency_code; ?></b></p>
<p>Payment Status : <b><?php echo $payment_status; ?></b></p>
<a href="<?php echo base_url('index.php/cart/remove/all'); ?>"> Back to Products</a>
  





