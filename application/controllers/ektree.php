<?php
class Ektree extends CI_Controller
{
       Public $data;
 
       public function ckeditor()
       {
        $this->load->view('ckeditor',$this->data);	
       
       }
}
?>