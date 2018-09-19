<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model{
    function __construct() {
        $this->proTable = 'new';

        $this->transTable = 'payment';

    }
    
    // Fetch and return product data
    public function getRows($id = ''){
        $this->db->select('*');
        $this->db->from($this->proTable);
        if($id){
            $this->db->where('serial', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    
    // Insert transaction data
    public function insertTransaction($data = array()){

       $insert = $this->db->insert($this->transTable,$data);
        return $insert?true:false;
    }
}