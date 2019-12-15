<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class invoice extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_invoice');
        
    }
    
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('admin/kue/invoice', $data);
        
    }

    public function detail($id){
        $data['invoice'] = $this->model_invoice->ambil_invoice($id);
        $data['pesan']=$this->model_invoice->ambil_pesan($id);
        $this->load->view("admin/kue/detail", $data);
        
    
    }

}


