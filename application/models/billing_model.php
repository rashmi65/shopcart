<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

public function insert_customer($data)//update and insert from profile view in db 
{  

$email=$this->session->userdata('email');
$q = $this->db
-> select('femail')
->where('femail', $email)
->get('customers');//print_r($q);

if ($q->num_rows() > 0)
// if ('select femail from customers where femail=$email')

{$column_id_value=$this->session->userdata('email');
$value=  $this->input->Post('name');
$this->db->where('femail', $column_id_value); //which row want to upgrade  
$this->db->update('customers', $data);
}
else
{

$this->db->insert('customers', $data);

$id = $this->db->insert_id();

return (isset($id)) ? $id : FALSE;



}
//return $query->row_array();

$q = $this->db->get('customers');
return $q->result();

}
public function insert_order($data)//update and insert from billing1 view in db 
	{
		$this->db->insert('orders', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
	public function insert_customer1($data)
{
		
	$email=$this->session->userdata('email');
$q = $this->db
	-> select('femail')
->where('femail', $email)
->get('customers');//print_r($q);

if ($q->num_rows() > 0)
	// if ('select femail from customers where femail=$email')
	
		{$column_id_value=$this->session->userdata('email');
$value=  $this->input->Post('name');
$this->db->where('femail', $column_id_value); //which row want to upgrade  
$this->db->update('customers', $data);
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
			
}
else
{
	
	$this->db->insert('customers', $data);


			
	
		 		}
	//return $query->row_array();
	
 $q = $this->db->get('customers');
 return $q->result();

}
}