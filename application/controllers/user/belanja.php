<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belanja extends CI_Controller{
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('cart');
        $this->load->model('checkout_model');
        $this->load->library('form_validation');
        $this->load->model('model_invoice');
        
        
    }
    
    function index(){
        
        // Load the cart view
        $this->load->view('user/user/cart');
    }
    
    function update_cart($rowid){
       
        if($rowid){
            $data = array(
                'rowid' => $rowid,
                'qty'   => $this->input->post('qty')
            );
            $update = $this->cart->update($data);
            $this->session->set_flashdata('sukses', 'Data keranjang telah diupdate');
            
            redirect('user/belanja','refresh');
            
        }
        
        
        redirect('user/belanja','refresh');
        
    }
    
    function removeItem($id){
        // Remove item from cart
        $remove = $this->cart->remove($id);
        
        // Redirect to the cart page
        redirect('user/belanja');
    }
    
    function checkout(){
        $data["brg"] = $this->checkout_model->getcheckout();
        $this->load->view("user/user/checkout",$data);

    }

    
    public function proses_order()
    {
        $proses=$this->model_invoice->index();
        if($proses){
            $this->cart->destroy();
            $this->load->view('user/user/sukses');

        }else{
            echo "Maaf, Pesanan gagal diproses";
        }

        
        
    }

}