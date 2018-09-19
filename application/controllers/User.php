<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
			}
	public function index()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('home');
		}
		else{
			$this->load->view('header');
		}
	}
public function login() //if email password correct then user is logged in 
	{
		//load session library
		$this->load->library('session');
		$email = $_POST['email'];
		$password = $_POST['password'];
		$data = $this->users_model->login($email, $password);
		$this->session->set_userdata($data);
		if($data)
		{
			$this->session->set_userdata('register', $data);
			$this->session->set_userdata('email',$email);
			redirect('welcome/index');
		}
		else
		{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}

	
public function logout()//user logout 
	{
	
		$this->load->library('session');
		$this->session->unset_userdata('register');
		redirect('/');
	}
public function forgotpassword()//forgot password view
	{        $this->load->library('google');

	  $data['loginURL'] = $this->google->loginURL();
		$this->load->view('forgotpassword.php',$data);	

	}
public function forgotpass()//forgot password of Users
	{
	if($this->input->post('forgotpass'))
		{
			$email=$this->input->post('email');
			$query = $this->db->query('select id,email from register where email="'.$email.'"');
			$res= $query->row_array();
			$id=$res['id'];
			if($query->num_rows() > 0)
			{
				$to = $email;
				$subject = "Password";
				$txt = "click on this link to change your password- http://localhost/shopcart/index.php/welcome/forgotpass2/$id";
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
			}	  $data['loginURL'] = $this->google->loginURL();
			$this->load->view('forgotpassword.php',@$data);	
		}
	}
}
