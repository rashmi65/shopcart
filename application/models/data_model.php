<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

public function get_women($id)//fetch single product from women view
    {
        $query = $this->db->query("SELECT * FROM products WHERE serial='$id'");
        $result = $query->result_array();
        return $result; //return as object array
    }
	public function get_men($id)//fetch single product from men view
    {
        $query = $this->db->query("SELECT * FROM mendata WHERE serial='$id'");
        $result = $query->result_array();
        return $result; //return as object array
    }
		public function get_home($id)//fetch single product from index & single view
    {
        $query = $this->db->query("SELECT * FROM new WHERE serial='$id'");
        $result = $query->result_array();
        return $result; //return as object array
    }
	
}