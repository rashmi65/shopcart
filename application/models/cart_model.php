<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function womenproduct() //fetch products on womens view
	{
	$query = $this->db->get('products');
	return $query->result_array();
	}
	
	public function menproduct()//fetch products on mens view
	{
	$query = $this->db->get('mendata');
	return $query->result_array();
	}
	
	public function homecategory1()//fetch products on index view  
	{
		$this->db->where('description', 'mens');
		$query = $this->db->get('new');
		$query->result_array();
		return $query->result_array();
	}
	public function totaluser()//count and fetch  total registered user
	{	
		$query = $this -> db
		-> select('count(id)')
		-> get('register');
		return $query->result();
	}

public function homecategory2()//get product from db to show on home page 
	{
		$this->db->where('description', 'womens');
		$query = $this->db->get('new');
		$query->result_array();
		return $query->result_array();
 
	}

public function homecategory3()//get product from db to show on home page 
	{
		$this->db->where('description', 'bag');
		$query = $this->db->get('new');
		$query->result_array();
		return $query->result_array();
 
	}

public function homecategory4()//get product from db to show on home page 
	{
		$this->db->where('description', 'footwear');
		$query = $this->db->get('new');
		$query->result_array();
		return $query->result_array();
	}
	
function update_cart($rowid, $qty, $price, $amount) //update cart item
	{
		$data = array(
		'rowid'   => $rowid,
		'qty'     => $qty,
		'price'   => $price,
		'amount'   => $amount
		);
		$this->cart->update($data);
	}

function registeruser($data)//user registration
	{ 
		$this->db->insert('register', $data); // insert data into register table
	}
	
public function singleproduct()//fetch products from new table to single view
	{
		$query = $this->db->get('new');
		return $query->result_array();
	}
   
   
	
}