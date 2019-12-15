<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('model_invoice');
        $this->load->library('cart');
        $this->load->library('form_validation');
        
        
    }

    public function index()
    {
          $data["bsh"] = $this->user_model->getAllData();
          $data["basah"] = $this->user_model->getAllKueBasah();
          $data["kering"] = $this->user_model->getAllKueKering();
          $this->load->view("user/user/overview",$data);
    }

    public function menu()
    {
        $data["bsh"] = $this->user_model->getAllKueBasah();
        $data["bas"] = $this->user_model->getAllKueBasah();
        $data["kering"] = $this->user_model->getAllKueKering();
          $this->load->view("user/user/menu",$data);
    }

    function addToCart($id){
        
        // Fetch specific product by ID
        $product = $this->model_invoice->getKueById($id);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id_kue'],
            'qty'    => 1,
            'price'    => $product['harga'],
            'name'    => $product['nama_kue'],
            'image' => $product['foto']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        
        redirect('user/belanja','refresh');
        
    }

    

}

/* End of file index.php */
