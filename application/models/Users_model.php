<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
public function login($email, $password)//user login 
{
	$users = $this->db
	-> select('name')
	-> where('email', $email)
	-> limit(1)
	-> get('register ');
	$query = $this->db->get_where('register', array('email'=>$email, 'password'=>$password));
	return $query->row_array();
}
public function adpass()// change password of user
	{
		$column_id_value=$this->session->userdata('id');
		$value=  $this->input->Post('password');
		$value1=  $this->input->Post('currentpass');
		$this->db->where('id', $column_id_value);
		$query = $this->db->get('register');
		$row    = $query->row();
		$row = $query->row();
		if($value1 == $row->password)
		{
			$this->db->set('password', $value); //value that used to update column  
			$this->db->where('id', $column_id_value); //which row want to upgrade  
			$this->db->update('register');
			return true;
		}
		else
			$this->form_validation->set_message('adpass', 'wrong old password.');        return false;
	}
	public function adpass2($id)// forgot change password of user
	{
	
		$value=  $this->input->Post('password');
		$this->db->where('id', $id);
		$query = $this->db->get('register');
		$row    = $query->row();
		$row = $query->row();
		
			$this->db->set('password', $value); //value that used to update column  
			$this->db->where('id', $id); //which row want to upgrade  
			$this->db->update('register');
			return true;
	
		
	}
public function updatepass()//update password of logged in user
	{
		$column_id_value=$this->session->userdata('password');
		$value=  $this->input->Post('password');
		$this->db->set('password', $value); //value that used to update column  
		$this->db->where('password', $column_id_value); //which row want to upgrade  
		$this->db->update('register');

	}
public function namedisplay()//display name of logged in user
	{
		$column_id_value=$this->session->userdata('email');
		$q = $this -> db
		-> select('name,email,address,phone,state,city,pincode,country')
		-> where('femail', $column_id_value)

		-> get('customers');

		return $q->result();
	}
public function order_details($id)//order of users according to their id 
{
	 $this->db->where('user_id',$id);
    $query=$this->db->get('payment');
	return $query->result();
}
public function search()
	{

	// this is the search display
  $art = html_escape(trim($this->input->post('search')));
  $this->db->like('name', $art);
  $this->db->select('serial,name, description, price, picture');
  $query = $this->db->get('new');
  		return $query->result_array();
	}
}
	
?>