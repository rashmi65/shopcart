<?php  
   class admin_model extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      } 
function can_login($username, $password) //matching pass and username to admin login 
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('admin');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
public function user()//total user retrive from this   
      {  
         //data is retrive from this query  
         $query = $this->db->get('register');  
         return $query;  
      } 
public function product()  //total product retrive from this 
      {  
         //data is retrive from this query  
		$query = $this->db->get('new');  
		return $query->result_array();        
      } 
public function editproduct($id)  //edit product 
      {  
         //data is retrive from this query  
         $query = $this->db->query("SELECT * FROM new WHERE serial='$id'");
        $result = $query->result_array();
        return $result; //return as object array
		     
      } 
public function order()  //total oders retrive from this 
      {  
         //data is retrive from this query  
         $query = $this->db->get('payment');  
         return $query;  
      } 
public function deleteuser($table, $where = array())//delete user by id 
	{
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
		return TRUE;
		else
		return FALSE;
	}
public function deleteorder($table, $where = array())//delete order by id
	{
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
		return TRUE;
		else
		return FALSE;
	}
public function deleteproduct($table, $where = array()) //delete product by id 
	{
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
		return TRUE;
		else
		return FALSE;
	}
public function deletesub($table, $where = array())// delete submenu by id 
	{
	  $this->db->where($where);
	  $res = $this->db->delete($table); 
	  if($res)
		return TRUE;
	  else
		return FALSE;
	}
public function deletemenu($table, $where = array()) //delete menu by id 
	{
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
		return TRUE;
		else
		return FALSE;
	}

function addsubmenu()//add submenus
	{ 
		$id=$this->input->post('m_menu_id');
		$name=$this->input->post('s_menu_name');
		$link=$this->input->post('s_menu_link');

		$field = array(
		'm_menu_id'=>$id,
		's_menu_name'=>$name,
		's_menu_link'=>$link,
		);
		$this->db->insert('sub_menu', $field);
		if($this->db->affected_rows() > 0){
		return true;
		}else{
		return false;
		}
	}
function addmenu()//add menus 
	{ 
		$name=$this->input->post('m_menu_name');
		$link=$this->input->post('m_menu_link');

		$field = array(
		'm_menu_name'=>$name,
		'm_menu_link'=>$link,
		);
		$this->db->insert('main_menu', $field);
		if($this->db->affected_rows() > 0){
		return true;
		}else{
		return false;
		}
	}
public function menu()  //retrive total menus
	{  
		//data is retrive from this query  
		$query = $this->db->get('main_menu');  
		return $query->result_array();      
	} 
public function editsub($id)  //fetch submenus from db by id
	{  
		//data is retrive from this query  
		$query = $this->db->query("SELECT * FROM sub_menu WHERE s_menu_id='$id'");
		$result = $query->result_array();
		return $result; //return as object array
	} 
public function editmenus($id)  //fetch menus from db by id
	{  
		//data is retrive from this query  
		$query = $this->db->query("SELECT * FROM main_menu WHERE m_menu_id='$id'");
		$result = $query->result_array();
		return $result; //return as object array
	} 
	
public function updateprofile()  //update profile of admin 
	{   
		$email=  $this->input->Post('email');
		$data = array(
		'email' => $email

		);
		$this->db->update('admin', $data);
		$query = $this->db->get('admin'); 
		$result = $query->result();
		return $result; 

	}
public function updatemenu($id)  //update menus by id 
	{  
		$value1=  $this->input->Post('m_menu_name');
		$value2=  $this->input->Post('m_menu_link');
		$data = array(
		'm_menu_name' => $value1,
		'm_menu_link' => $value2,
		);

		$this->db->where('m_menu_id', $id);
		$this->db->update('main_menu', $data);
		$query = $this->db->get('main_menu'); 
		$result = $query->result();
		return $result; //return as object array		     
	} 
public function updatesubmenu($id)  //update submenus by id 
	{  
		$value1=  $this->input->Post('m_menu_id');
		$value2=  $this->input->Post('s_menu_name');
		$value3=  $this->input->Post('s_menu_link');
		$data = array(
		'm_menu_id' => $value1,
		's_menu_name' => $value2,
		's_menu_link' => $value3

		);

		$this->db->where('s_menu_id', $id);
		$this->db->update('sub_menu', $data);
		$query = $this->db->get('sub_menu'); 
		$result = $query->result();
		return $result; //return as object array		     
	} 
public function submenu()  //retrive total submenus 
	{  
		//data is retrive from this query  
		$query = $this->db->get('sub_menu');  
		return $query->result_array();      
	} 
function adprofile()// retrive username and email on admin profile view
	{
		$this->db->select('username,email');
		$q = $this->db->get('admin');
		if($q->num_rows() > 0)
		{
		// we will store the results in the form of class methods by using $q->result()
		// if you want to store them as an array you can use $q->result_array()
		foreach ($q->result() as $row)
		{
		$data[] = $row;
		}
		return $data;
		}
	}
public function adpass()// change password of admin 
	{
		$column_id_value=$this->session->userdata('username');
		$value=  $this->input->Post('password');
		$value1=  $this->input->Post('currentpass');
		$this->db->where('username', $column_id_value);
		$query = $this->db->get('admin');
		$row    = $query->row();
		$row = $query->row();
		if($value1 == $row->password)
		{
			$this->db->set('password', $value); //value that used to update column  
			$this->db->where('username', $column_id_value); //which row want to upgrade  
			$this->db->update('admin');
			return true;
		}
		else
			$this->form_validation->set_message('adpass', 'wrong old password.');        return false;
	}
	public function forgotchange()// forgot password of admin 
	{
		$value=  $this->input->Post('password');
		$query = $this->db->get('admin');
		$row    = $query->row();
		$row = $query->row();
		
			$this->db->set('password', $value); //value that used to update column  
			
			$this->db->update('admin');
			return true;
		}
		
	
}  
?>  