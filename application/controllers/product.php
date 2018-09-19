<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load google login library
        $this->load->library('google');   
	}

	
	
public function get_women($id)//this know only one parameter will be come to this
{	//google login url
        $data['loginURL'] = $this->google->loginURL();
		//get user info from session
        $data['userData'] = $this->session->userdata('userData');
	$this->load->model('data_model');
	  $data['details']=$this->data_model->get_women($id);//passing the product id to get details of  product
	
  $this->load->view('product_single', $data);
}
public function get_men($id)//this know only one parameter will be come to this
{//google login url
        $data['loginURL'] = $this->google->loginURL();
		//get user info from session
        $data['userData'] = $this->session->userdata('userData');
	$this->load->model('data_model');
	  $data['details']=$this->data_model->get_men($id);//passing the product id to get details of product
	
  $this->load->view('product_single', $data);
}
public function get_home($id)//this know only one parameter will be come to this
{//google login url
        $data['loginURL'] = $this->google->loginURL();
		//get user info from session
        $data['userData'] = $this->session->userdata('userData');
	$this->load->model('data_model');
	  $data['details']=$this->data_model->get_home($id);//passing the product id to get details of product
	
  $this->load->view('product_single', $data);
}
}