<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{    
		parent::__construct();
		$this->load->model('Cart_model');
	}

public function index()
	{
 //load google login library
        $this->load->library('google');		//google login url
      $this->data['loginURL'] = $this->google->loginURL();
	  //get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
		$this->data['title'] = 'Shopping Carts';
		if (!$this->cart->contents()){
		$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
		$this->data['message'] = $this->session->flashdata('message');
		}
		$this->load->view('cart', $this->data);
	}

public function add()//add item to  the cart 
	{
		$this->load->model('Cart_model');
		$insert_room = array(
		'id' => $this->input->post('id'),
				'picture' => $this->input->post('picture'),

		'name' => $this->input->post('name'),
		'price' => $this->input->post('price'),
		'qty' => 1
		);		
		$this->cart->insert($insert_room);
		redirect('cart');
	}
	
function remove($rowid)//remove item from cart
	{
		if ($rowid=="all"){
		$this->cart->destroy();
		}else{
		$data = array(
		'rowid'   => $rowid,
		'qty'     => 0
		);
		$this->cart->update($data);
		}
		redirect('cart');
	}	

function update_cart()//update cart
	{
		foreach($_POST['cart'] as $id => $cart)
		{			
		$price = $cart['price'];
		echo $price;
		$amount = $price * $cart['qty'];
		echo $cart['qty'];
		echo $amount;

		$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		redirect('cart');
		}	
	}