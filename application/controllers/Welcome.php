<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
public function index()//load index view
	{	
        //load google login library
        $this->load->library('google');
		$this->load->model('Cart_model');
		$this->data['products'] = $this->Cart_model->homecategory1();
		$this->data['wo'] = $this->Cart_model->homecategory2();
		$this->data['bag'] = $this->Cart_model->homecategory3();
		$this->data['foot'] = $this->Cart_model->homecategory4();
		$this->data['result']=$this->Cart_model->totaluser();
		//google login url
       $this->data['loginURL'] = $this->google->loginURL();
        

        //get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
       
		$this->load->view('index', $this->data);
	}

	
public function about()//load about view

	{//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
        //load google login library
        $this->load->library('google');
	$this->data['loginURL'] = $this->google->loginURL();
		$this->load->view('about.php',$this->data);
	}
	
public function men()//load mens view
	{ //load google login library
        $this->load->library('google');
		//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
	$this->data['loginURL'] = $this->google->loginURL();
		$this->load->model('Cart_model');
		$this->data['products'] = $this->Cart_model->menproduct();
		$this->load->view('mens', $this->data);
	}
	
public function women()//load womens view
	{ //load google login library
        $this->load->library('google');
		//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
	$this->data['loginURL'] = $this->google->loginURL();
		$this->load->model('Cart_model');
		$this->data['products'] = $this->Cart_model->womenproduct();
		$this->load->view('womens', $this->data);
	}

public function contact()//load contact view
	{ //load google login library
        $this->load->library('google');
		//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
	$this->data['loginURL'] = $this->google->loginURL();
		$this->load->view('contact.php',$this->data);
	}
			
public function single()//load single view
	{//load google login library
        $this->load->library('google');
	$this->data['loginURL'] = $this->google->loginURL();
	//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
		$this->load->model('Cart_model');
		$this->data['products'] = $this->Cart_model->singleproduct();
		$this->load->view('single', $this->data);
	}
	
public function typography()//load typography view
	{//load google login library
        $this->load->library('google');
		//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
	$this->data['loginURL'] = $this->google->loginURL();
		$this->load->view('typography.php',$this->data);
	}
		
public function webicons()//load icon view
	{//load google login library
        $this->load->library('google');
		//get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
	$this->data['loginURL'] = $this->google->loginURL();
		$this->load->view('icons.php',$this->data);
	}
	
function registeruser()//user registration
	{	
		$this->load->model('Cart_model');
			if($this->input->post('save'))
			{
				$data = array(
				'name'     => $this->input->post('name'),
				'email'  => $this->input->post('email'),
				'password'   => $this->input->post('pass'),

				);
				$this->Cart_model->registeruser($data); 
				$this->session->set_flashdata('message', 'Sucessfully Registered.');
				redirect("welcome/single");
			}
	}

public function womenproduct()//womens product on women view
	{
		$this->load->model('Cart_model');
		$query = $this->Cart_model->womenproduct();
		$data['result'] = null;
		if($query)
		{
		$data['result'] = $query;
		}
		$this->load->view('womens', $data);
	}
 	
public function menproduct()//mens product on men view
	{
		$this->load->model('Cart_model');
		$query = $this->Cart_model->menproduct();
		$data['result'] = null;
		if($query)
		{
			$data['result'] = $query;
		}
		$this->load->view('mens', $data);
	}
	
public function homecategory1()//fetch womens product on index view
	{
		 $this->load->model('Cart_model');
		 $query = $this->Cart_model->home();
		 $data['result'] = null;
		 if($query)
		  {
		   $data['result'] = $query;
		  }
		  $this->load->view('index', $data);
	 }
 
public function homecategory2()//fetch mens product on index view
	{
		$this->load->model('Cart_model');
		$query = $this->Cart_model->home2();
		$data['result'] = null;
		if($query)
		{
		$data['result'] = $query;
		}
		$this->load->view('index', $data);
	}
 
public function homecategory3()//fetch bags on index view
	{
		$this->load->model('Cart_model');
		$query = $this->Cart_model->home3();
		$data['result'] = null;
		if($query)
		{
		$data['result'] = $query;
		}
		$this->load->view('index', $data);
	}
 
public function homecategory4()//fetch slippers on index view
	{
		$this->load->model('Cart_model');
		$query = $this->Cart_model->home4();
		$data['result'] = null;
		if($query)
		{
		 $data['result'] = $query;
		}
		$this->load->view('index', $data);
	}

public function singleproduct()//fetch products on single view
	{
		$this->load->model('Cart_model');
		$query = $this->Cart_model->single();
		$data['result'] = null;
		if($query)
		{
		 $data['result'] = $query;
		}
		$this->load->view('single', $data);
	}
 
public function profile1()//add user detail in db for billing on billing1 view
	{
		$data = array();
		$this->load->model('Users_model');
		$data['result']=$this->Users_model->namedisplay();
		$this->load->view('billing1.php',$data);
	
	}
public function changepassword()//to load the changepassword view
	{
	
		$this->load->view('changepassword.php');
	
	}
	public function forgotpass2($id)//to load the forgotpassword  view after click on the link
 	{
	// echo $id;
	// exit;
	$userid=array();
	$userid['result']=$id;
	
		$this->load->view('forgotpass.php',$userid);
	
	}
public function profilepasschange()//password change for users 
	{

		$this->load->model("Users_model"); //load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('currentpass','Old Password','required');
		$this->form_validation->set_rules('password','New Password','required');
		$this->form_validation->set_rules('Confirm','Retype Password','required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{  
		$this->load->view('changepassword.php');
		}
		else
		{	
			if( $this->Users_model->adpass())
			{
				$this->session->set_flashdata('success', 'password changed successfully');  
				$this->load->view('changepassword.php');
			}
			else
			{ 
				$this->session->set_flashdata('success', 'old password is incorrect'); 
				$this->load->view('changepassword.php');
			}
		}
	}
public function profilepasschange2()// forgot password change for users 
	{
         $id= $this->input->post('userid');
	$userid=array();
	$userid['result']=$id;
		$this->load->model("Users_model"); //load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password','New Password','required');
		$this->form_validation->set_rules('Confirm','Retype Password','required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{  
		$this->load->view('forgotpass.php');
		}
		else
		{	
	$result=$this->Users_model->adpass2($id);
			
 $this->session->set_flashdata('success', 'password changed successfully now you can login successfully');  
				
		
		$this->load->view('forgotpass.php',$userid);
			
		}
	}
	   
public function contactemail()//contact form details sent to email of admin 
	{	 //load google login library
        $this->load->library('google');
		$this->load->library('email');
 $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // required
	 $email_message = "Form details below.\n\n";
	function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

			$email_message .="Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
      
$config['mailtype'] = 'text';
$this->email->initialize($config);
$this->email->to('er.rashmisharma1998@gmail.com');
$this->email->from('er.rashmisharma1998@gmail.com','Shopcart');
$this->email->subject('Someone Want to contact');
$this->email->message($email_message);
$this->email->send();
		$this->session->set_flashdata('contact', 'Your Requset Sent Successfully.');
//google login url
        $data['loginURL'] = $this->google->loginURL();
		$this->load->view('contact.php',$data);
	  
	}
	 public function googleindex()//google login
	 {
		   //load google login library
        $this->load->library('google');
        
        //load user model
        $this->load->model('user');
        //redirect to profile page if user already logged in
        if($this->session->userdata('loggedIn') == true){
            redirect('welcome/googleprofile/');
        }
        
        if(isset($_GET['code'])){
            //authenticate user
            $this->google->getAuthenticate();
            
            //get user info from google
            $gpInfo = $this->google->getUserInfo();
            
            //preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid']      = $gpInfo['id'];
            $userData['first_name']     = $gpInfo['given_name'];
            $userData['last_name']      = $gpInfo['family_name'];
            $userData['email']          = $gpInfo['email'];
            $userData['gender']         = !empty($gpInfo['gender'])?$gpInfo['gender']:'';
            $userData['locale']         = !empty($gpInfo['locale'])?$gpInfo['locale']:'';
            $userData['profile_url']    = !empty($gpInfo['link'])?$gpInfo['link']:'';
            $userData['picture_url']    = !empty($gpInfo['picture'])?$gpInfo['picture']:'';
            
            //insert or update user data to the database
            $userID = $this->user->checkUser($userData);
            
            //store status & user info in session
            $this->session->set_userdata('loggedIn', true);
            $this->session->set_userdata('userData', $userData);
            
            //redirect to profile page
            redirect('welcome/googleprofile/');
        } 
        
        //google login url
        $data['loginURL'] = $this->google->loginURL();
        
        //load google login view
        $this->load->view('welcome/index',$data);
    }
    
    public function googleprofile() // after successful login
	{
		
		

        
       
		  //load google login library
        $this->load->library('google');
        $this->load->model('Cart_model');
		$this->data['products'] = $this->Cart_model->homecategory1();
		$this->data['wo'] = $this->Cart_model->homecategory2();
		$this->data['bag'] = $this->Cart_model->homecategory3();
		$this->data['foot'] = $this->Cart_model->homecategory4();
		$this->data['result']=$this->Cart_model->totaluser();
        //load user model
        $this->load->model('user');
        //redirect to login page if user not logged in
        if(!$this->session->userdata('loggedIn')){
            redirect('/welcome/');
        }
        
        //get user info from session
        $this->data['userData'] = $this->session->userdata('userData');
        
        //load user profile view
        $this->load->view('index',$this->data);
    }
    
    public function googlelogout()//google logout
	{
		  //load google login library
        $this->load->library('google');
        
        //load user model
        $this->load->model('user');
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('/welcome/');
    } 
  
    
public function profile()//add user detail in db for billing on profile view
	{	//get user info from session
		$data = array();
		$this->load->model('Users_model');
		        $data['userData'] = $this->session->userdata('userData');

		$data['result']=$this->Users_model->namedisplay();
		$this->load->view('profile.php',$data);
	
	if ($this->input->post('changepass')) 
		{//get user info from session
        $data['userData'] = $this->session->userdata('userData');
		$this->Users_model->updatepass();
		$this->load->view('profile.php',$data);
		}
	}
   
public function order()//orders details of login user 
	{
		//get user info from session
        $data['userData'] = $this->session->userdata('userData');
		$this->load->model('Users_model');
		$id = $this->session->userdata('id');
		$data['records']  = $this->Users_model->order_details($id);
		$this->load->view('order.php',$data);
	  
	}
 
public function search()//serach products
	{	  //load google login library
        $this->load->library('google');
		//get user info from session
        $data['userData'] = $this->session->userdata('userData');
		 //google login url
        $data['loginURL'] = $this->google->loginURL();
		$this->load->model('Users_model');
		$data['h'] = $this->Users_model->search();
		$this->load->view('search.php', $data);        
	
	}
	
}
