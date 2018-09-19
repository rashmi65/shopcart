<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Billing_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Billing';
		
		$this->load->view('billing1', $this->data);
	}
	
	public function save_order1()//save detail of profile view in db 
	{
		$this->load->library('session');
		$customer = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'address' => $this->input->post('address'),
		'phone' => $this->input->post('phone'),
		'country' => $this->input->post('country'),

		'state' => $this->input->post('state'),
		'city' => $this->input->post('city'),
		'pincode' => $this->input->post('pincode'),
		'femail'=> $this->session->userdata('email')

		);	
		$cust_id = $this->Billing_model->insert_customer($customer);
		$data = array();
		$this->load->model('Users_model');
		$data['result']=$this->Users_model->namedisplay();
		$this->load->view('profile.php',$data);
	}

public function save_order()//save detail of profile1 view in db 
	{
		$this->load->library('session');
		$customer = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'address' => $this->input->post('address'),
		'phone' => $this->input->post('phone'),
		'country' => $this->input->post('country'),

		'state' => $this->input->post('state'),
		'city' => $this->input->post('city'),
		'pincode' => $this->input->post('pincode'),
		'femail'=> $this->session->userdata('email')

		);	
		$cust_id = $this->Billing_model->insert_customer1($customer);
		//$order = array(
		//'date' => date('Y-m-d'),
		//'customerid' => $cust_id
		//);	
		//$ord_id = $this->Billing_model->insert_order($order);
		//if ($cart = $this->cart->contents()):
		//foreach ($cart as $item):
		//$order_detail = array(
		//'orderid' => $ord_id,
		//'productid' => $item['id'],
		//'quantity' => $item['qty'],
		//'price' => $item['price']
		//);	
		//$cust_id = $this->Billing_model->insert_order_detail($order_detail);
		//endforeach;
		//endif;

		$this->load->view('payment');
	}
}