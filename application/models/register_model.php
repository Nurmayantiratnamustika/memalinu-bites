<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {
    
    
    public function register() 
    {
       
        $data= 
        [
        "username"=>$this->input->post('username',true),
        "password"=>$this->input->post('pass',true),
        "email"=>$this->input->post('email',true),
        "telepon"=>$this->input->post('telepon',true),
        "alamat"=>$this->input->post('alamat',true),
        "level"=>'user'
         ] ;
          $this->db->insert('customer',$data);
    }

    

}

/* End of file register_model.php */
    
    
    
