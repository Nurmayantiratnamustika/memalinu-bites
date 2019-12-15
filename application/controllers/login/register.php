<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  register extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('register_model');
        
        
    }
    

    public function index()
    {
     
     $this->load->view('login/register');
     
    
    
    }
    public function register(){

      
            $this->register_model->register();
            redirect('login/login','refresh');

        }

    }
