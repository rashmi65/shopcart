<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class admin extends CI_Controller {
      //functions  
	  	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		 $this->load->library('session');

			}
public function adprofile()//profile settings of admin 
	{

		$this->load->model("admin_model"); //load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$data["users"]=$this->admin_model->adprofile();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('currentpass','Old Password','required');
		$this->form_validation->set_rules('password','New Password','required');
		$this->form_validation->set_rules('Confirm','Retype Password','required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{  
		$this->load->view('admin/profile',$data);
		}
		else
		{	
			if( $this->admin_model->adpass())
			{
				$this->session->set_flashdata('success', 'password changed successfully');  
				$this->load->view('admin/profile',$data);
			}
			else
			{ 
				$this->session->set_flashdata('success', 'old password is incorrect'); 
				$this->load->view('admin/profile',$data);
			}
		}
	}
	public function adpasschange()//forgot password for admin
	{

		$this->load->model("admin_model"); //load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password','New Password','required');
		$this->form_validation->set_rules('Confirm','Retype Password','required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{  
		$this->load->view('admin/reset_password.php');
		}
		else
		{	
			if( $this->admin_model->forgotchange())
			{
				$this->session->set_flashdata('success', 'password changed now you can successfully login');  
				$this->load->view('admin/reset_password.php');
			}
			
		}
	}
public function updateprofile()//for update email address of admin 
	{
		$this->load->model("admin_model"); // we load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$this->admin_model->updateprofile();
		$this->session->set_flashdata('updateprofile', 'Email Changed successfully');  
		$data["users"]=$this->admin_model->adprofile();
		$this->load->view('admin/profile',$data);
	}
public function adlogin()//login view for admin login
	{
		$this->load->view('admin/login');
	}
public function resetpassword()//reset password view 
	{
		$this->load->view('admin/reset_password.php');
	}
public function forgotpass()//forgot password of admin
	{
		if($this->input->post('forgotpass'))
		{
			$email=$this->input->post('email');
			$query = $this->db->query('select id,email from admin where email="'.$email.'"');
			$res= $query->row_array();
			$id=$res['id'];
			if($query->num_rows() > 0)
			{
				//Mail Code
				$to = $email;
				$subject = "Password";
				$txt = "click on this link to change your password- http://localhost/shopcart/index.php/admin/resetpassword";
				$headers = "From: er.rashmisharma1998@gmail.com" . "\r\n" .
				"CC: er.rashmisharma1998@gmail.com";
				mail($to,$subject,$txt,$headers);
				$this->session->set_flashdata('sendmail', 'Password Recovery Mail is Sent To Your gmail account,click on the link to reset your password.');
			}
			else
			{
				$data['error']="
				Invalid Email ID !
				";
			}
		}
		$this->load->view('admin/forgot-password',@$data);	

	}
public function adindex()//dashboard of admin after successfully login
	{
		$this->load->view('admin/index');
	}
public function adforgotpassword()//forgot password for admin 
	{
		$this->load->view('admin/forgot-password');
	}
public function addmenu()//add menus to database
	{
		$this->load->view('admin/addmenu');
	}
public function admenu()//total menus 
	{
		$this->load->model('admin_model');  
		$data['h']=$this->admin_model->menu(); 
		$this->load->view('admin/menus',$data);
	}
public function addsub()//add submenus to database
	{
		$this->load->view('admin/addsubmenu');
	}
public function adsub()//total submenus
	{
		$this->load->model('admin_model');  
		$data['h']=$this->admin_model->submenu(); 
		$this->load->view('admin/submenus',$data);
	}
public function editsub($id)//edit submenus view
	{
		$this->load->model('admin_model');  
		$this->data['h'] = $this->admin_model->editsub($id);
		$this->load->view('admin/editsubmenu', $this->data);        
	}
public function editproduct($id)//edit product view 
	{
		$this->load->model('admin_model');  
		$this->data['h'] = $this->admin_model->editproduct($id);
		$this->load->view('admin/editproduct', $this->data);        
	}
public function editmenus($id)//edit menus view
	{
		$this->load->model('admin_model');  
		$this->data['h']=$this->admin_model->editmenus($id); 
		$this->load->view('admin/editmenu', $this->data);
	}
	  public function deleteimage()//delete any image from edit product view
	  {	
			$deleteid  = $this->input->post('image_id');
			       $this->db->where('serial', $id);
				$this->db->delete('new', array('serial' => $deleteid)); 
			$verify = $this->db->affected_rows();
			echo $verify;

		}
public function updateproduct($id)//update product by id
	{
		$this->load->library('session');
		$this->load->library('form_validation');  
		$this->form_validation->set_rules('name', 'name', 'required');  
		$this->form_validation->set_rules('des', 'category', 'required');  
		$this->form_validation->set_rules('price', 'price', 'required');  
		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'Document', 'required');
		}
		if($this->form_validation->run()==FALSE)
		{  
			$this->load->view("admin/adproduct");
		}
		else{
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = 'images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
			$value1=  $this->input->Post('name');
			$value2=  $this->input->Post('price');
		$value3=  $this->input->Post('des');
            $names= implode(',', $name_array);
   $this->load->database();
            $db_data = array('name' => $value1,'description' => $value3,'price' => $value2,'picture'=> $names);
       $this->db->where('serial', $id);
	  $data['h'] = 	$this->db->update('new', $db_data);
		$this->session->set_flashdata('updateproduct', 'Product Updated Sucessfully.');
redirect('admin/adproduct');
	}
		
	
	}
public function updatemenu($id)//update menus
	{
		$this->load->model('admin_model');  
		$this->data['h']=$this->admin_model->updatemenu($id); 
		$this->session->set_flashdata('updatemenu', 'Menu Updated Sucessfully.');
		redirect('admin/admenu');
	}
public function updatesubmenu($id)//update submenus
	{
		$this->load->model('admin_model');  
		$this->data['h']=$this->admin_model->updatesubmenu($id); 
		$this->session->set_flashdata('updatesubmenu', 'SubMenu Updated Sucessfully.');
		redirect('admin/adsub');
	}
public function aduser()//total user
	{
		$this->load->model('admin_model');  
		$data['h']=$this->admin_model->user();  
		$this->load->view('admin/registered',$data);
	}
public function  addproduct()//addproduct view
	{
		$this->load->view('admin/addproduct');
	}
public function  adproduct()//add products to database
	{
		$this->load->model('admin_model');  
		$data['h']=$this->admin_model->product(); 
		$this->load->view('admin/products',$data);
	}
public function  adorder()//total orders view
	{
		$this->load->model('admin_model');  
		$data['h']=$this->admin_model->order(); 
		$this->load->view('admin/orders',$data);
	}
public function admail()//mail view
	{
		$this->load->view('admin/mail');
	}
function login() //login view 
    {  		
		$data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
		$this->load->view("admin/login", $data);  
	}  
function logout() //admin logout
	{  
        $this->session->unset_userdata('username');  
		$this->load->view('admin/login');
    }  
public function deleted($id = '') //delete registered user 
	{
		$this->session->set_flashdata('userdelete', 'User Deleted Sucessfully.');
		$this->load->model('admin_model');
		$where = array('id' => $id); 
		$this->admin_model->deleteuser('register',$where);
		$data['h']=$this->admin_model->user();  
		$this->load->view('admin/registered',$data);
	}
public function deleteorder($id = '')//delete orders
	{
		$this->session->set_flashdata('orderdelete', 'Order Deleted Sucessfully.');
		$this->load->model('admin_model');
		$where = array('payment_id' => $id); 
		$this->admin_model->deleteorder('payment',$where);
		$data['h']=$this->admin_model->order();  
		$this->load->view('admin/orders',$data);
	}
public function deleteproduct($id = '')//delete products 
	{
		$this->session->set_flashdata('message', 'product Deleted Sucessfully.');
		$this->load->model('admin_model');
		$where = array('serial' => $id); 
		$this->admin_model->deleteproduct('new',$where);
		$data['h']=$this->admin_model->product();  
		$this->load->view('admin/products',$data);
	}
public function deletemenu($id = '') //delete menus
	{
		$this->session->set_flashdata('menu', 'menu deleted Sucessfully.');
		$this->load->model('admin_model');
		$where = array('m_menu_id' => $id); 
		$this->admin_model->deletemenu('main_menu',$where);
		$data['h']=$this->admin_model->menu();  
		$this->load->view('admin/menus',$data);
	}
public function deletesub($id = '')//delete submenus
	{
		$this->session->set_flashdata('submenu', 'submenu Deleted Sucessfully.');
		$this->load->model('admin_model');
		$where = array('s_menu_id' => $id); 
		$this->admin_model->deletesub('sub_menu',$where);
		$data['h']=$this->admin_model->submenu();  
		$this->load->view('admin/submenus',$data);
	}
// function addproducts()//add new products
	// {		
		// $this->load->library('session');
		// $this->load->library('form_validation');  
		// $this->form_validation->set_rules('name', 'name', 'required');  
		// $this->form_validation->set_rules('des', 'category', 'required');  
		// $this->form_validation->set_rules('price', 'price', 'required');  
		// if (empty($_FILES['file']['name']))
		// {
			// $this->form_validation->set_rules('file', 'Document', 'required');
		// }
		// if($this->form_validation->run()==FALSE)
		// {  
			// $this->load->view("admin/addproduct");
		// }
		// else
		// {
			// $this->load->model('admin_model');
			// $result=$this->admin_model->addproducts(); 
			// $this->session->set_flashdata('adprod', 'Product inserted successfully.');
			// $this->load->view("admin/addproduct");
		// }
	// }
	 function doupload() //add product
	 {
		 $this->load->library('session');
		$this->load->library('form_validation');  
		$this->form_validation->set_rules('name', 'name', 'required');  
		$this->form_validation->set_rules('des', 'category', 'required');  
		$this->form_validation->set_rules('price', 'price', 'required');  
		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'Document', 'required');
		}
		if($this->form_validation->run()==FALSE)
		{  
			$this->load->view("admin/addproduct");
		}
		else{
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = 'images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
			$value1=  $this->input->Post('name');

		$value2=  $this->input->Post('price');
		$value3=  $this->input->Post('des');
            $names= implode(',', $name_array);
   $this->load->database();
            $db_data = array('name' => $value1,'description' => $value3,'price' => $value2,'picture'=> $names);
        $this->db->insert('new',$db_data);
		$this->session->set_flashdata('adprod', 'Product inserted successfully.');
			$this->load->view("admin/addproduct");
		}
    }
function addsubmenu()//add submenus 
	{		
		$this->load->library('session');
		$this->load->library('form_validation');  
		$this->form_validation->set_rules('m_menu_id', 'main menu id', 'required');  
		$this->form_validation->set_rules('s_menu_name', 'submenu name', 'required');  

		if($this->form_validation->run()==FALSE)
		{  
			$this->load->view("admin/addsubmenu");
		}
		else
		{
			$this->load->model('admin_model');
			$result=$this->admin_model->addsubmenu(); 
			$this->session->set_flashdata('adsubmenu', 'SubMenu Created  successfully.');
			$this->load->view("admin/addsubmenu");
		} 
	}
function addmenus()//add menus
	{		
			$this->load->library('session');
			$this->load->library('form_validation');  
			$this->form_validation->set_rules('m_menu_name', 'menu name', 'required');  
			if($this->form_validation->run()==FALSE)
			{  
				$this->load->view("admin/addmenu");
			}
			else
			{
				$this->load->model('admin_model');
				$result=$this->admin_model->addmenu(); 
				$this->session->set_flashdata('admenu', 'Menu Created successfully.');
				$this->load->view("admin/addmenu");
			}

	}
function login_validation() //when correct username and password is correct user is logged in 
      {  		

			$this->load->library('session');
			$this->load->library('form_validation');  
			$this->form_validation->set_rules('username', 'Username', 'required');  
			$this->form_validation->set_rules('password', 'Password', 'required');  
			if($this->form_validation->run())  
			{  
				//true  
				$username = $this->input->post('username');  
				$password = $this->input->post('password');  
				//model function  
				$this->load->model('admin_model');  
				if($this->admin_model->can_login($username, $password))  
				{  
					$session_data = array(  
					'username'     =>     $username  
					);  
					$this->session->set_userdata($session_data);  
					$this->load->view('admin/index');
				} 
				else  
				{  
					$this->session->set_flashdata('error', 'Invalid Username and Password');  
					$this->load->view('admin/login');
				}  
			}  
			else  
			{  
				//false  
				$this->login();  
			}  
      }
}  