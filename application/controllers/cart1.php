<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart_model');
		   
	}

	public function index()
	
	{	
	  //load google login library
        $this->load->library('google');//google login url
      $this->data['loginURL'] = $this->google->loginURL();
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');


		}
//echo $rows = count($this->cart->contents());
		$this->load->view('cart1', $this->data);
	}
	public function adding()
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
		redirect('welcome/index');
		
	
	
	}
	public function addingmen()
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
		redirect('welcome/men');
		
	
	
	}
	public function addingwomen()
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
		redirect('welcome/women');
		
	
	
	}
	

	public function add()
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
		
		redirect('cart1');
	}
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('cart1');
	}	
	function remove2($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('welcome/index');
	}	

	function update_cart(){


 		foreach($_POST['cart1'] as $id => $cart)
		{			
			$price = $cart['price'];
			
			$amount = $price * $cart['qty'];
			
			


			$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		
		redirect('cart1');
	}	
}