<?php defined('BASEPATH') OR exit('No direct script access allowed');

class checkout_model extends CI_Model
{


    public function getcheckout(){
        $usr=$this->session->userdata('id');
       $this->db->select('*');
       $this->db->from('customer');
       $this->db->where('id_customer', $usr);

       $query=$this->db->get();
       return $query->result_array();
       
       
       
    }
}