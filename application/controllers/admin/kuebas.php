<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kuebas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('listkue_model');
        $this->load->library('form_validation');
        
        
    }
    

    public function index()
    {
        $data["bsh"] = $this->listkue_model->getAllData();
        $this->load->view("admin/kue/listKue",$data);
    }

    public function detail($id){
        $data['basah']=$this->listkue_model->getDataById($id);
        $this->load->view('admin/kue/detailkue',$data);
    }

    public function delete($id)
    {  
            $this->listkue_model->hapusData($id);
            redirect('admin/kuebas');
        
    }

    public function tambah()
    {
    
        $this->form_validation->set_rules('nama_kue','Nama','required');
        $this->form_validation->set_rules('bahan','Bahan','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('expired','Expired','required');
       
        if ($this->form_validation->run()){
        $this->listkue_model->tambahdata(); 
        $this->session->set_flashdata('flash-data', 'ditambahkan');
        redirect('admin/kuebas','refresh');
        }
        else{
            $this->load->view("admin/kue/form_kue");//tampil form add, yamg tampil viewnya

        }
  
    }
}

/* End of file kuebas.php */
