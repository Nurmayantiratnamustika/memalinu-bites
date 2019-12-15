<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
        
        
        
    }
    
    public function index()
    {
        
        $this->load->view("login/index");
    }
    

    public function proses_login(){
        $username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('pass'));

        $cekLogin=$this->login_model->login($username,$password);

        if($cekLogin){
            foreach ($cekLogin as $row) ;
            
               
              $this->session->set_userdata('user',$row->username);
              $this->session->set_userdata('id',$row->id_customer);
              $this->session->set_userdata('level',$row->level);

             if($this->session->userdata('level')=="admin" ){
                 
                 redirect('admin/kuebas');
             
             }
                elseif($this->session->userdata('level')=="user"){
                     
                     redirect('user/user');
                     
             }
        }
        
        else{
            $data['pesan']="Username dan passsword anda salah";
            $this->load->view('login/index',$data);
            // redirect('login/index','refresh');
                
        }
    }
                 

    public function logout(){
        
        $this->session->sess_destroy();
        
        redirect('login/index','refresh');
        
        
    }

}

