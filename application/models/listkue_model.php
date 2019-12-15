<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class listkue_model extends CI_Model {

    public $image="default.jpg";
    public $id;
    private $_client;
    public function __construct()
    {
    $this->_client =  new Client([
        'base_uri' => 'http://localhost:8080/kue/index.php/api/',
        'auth' => ['admin','1234']
    ]);

        
    }
    

    public function getAllData(){
   
        $response =$this->_client->request('GET','Kue',[
            'query' => [
                'bakery-key' => 'bakery123'
            ]

        ]);
        $result = json_decode($response->getbody()->getContents(),true);
        return $result['data'];
    }

    public function getDataById($id){
     
        $response = $this->_client->request('GET','Kue',[
            'query' => [
                'bakery-key' => 'bakery123',
                'id_kue' =>$id
            ]

        ]);
        $result = json_decode($response->getbody()->getContents(),true);
        return $result['data'][0];
    }

    public function hapusData($id){
        $response = $this->_client->request('DELETE','Kue',[
            'form_params'=> [
                'bakery-key' => 'bakery123',
                'id_kue' =>$id
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(),true);
        return $result;
    }

    public function tambahdata(){
        $this->id = uniqid();
        $data= 
        [
            'id_kuekering' => $this->input->post('id_kuekering',true),
            'nama_kue' => $this->input->post('nama_kue',true),
            'bahan' => $this->input->post('bahan',true),
            'harga' => $this->input->post('harga',true),
            'foto' => $this->_uploadImage(),
            'expired' => $this->input->post('expired',true),
            'bakery-key'=> 'bakery123'
    
         ] ;

         $response = $this->_client->request('POST','Kuebasah',[
            'multipart' => [
                [
                    'name'     => 'foto',
                    'contents' => file_get_contents($path . $name),
                ],
                [
                    'name'=> 'nama_kue',
                    'contents' => $this->input->post('nama_kue')
                ],
                [
                    'name'=> 'bahan',
                    'contents' => $this->input->post('bahan')
                ],
            [
                'name'=> 'harga',
                'contents' =>$this->input->post('harga')
            ],
            [
                'name'=>'expired',
                'contents' => $this->input->post('expired')
            ],
            [
                'name'=>'bakery-key',
                'contents' => 'bakery123'
            ]

            ]
        ]);
        $result = json_decode($response->getbody()->getContents(),true);
        return $result;

    }

    private function _uploadImage()
    {
     $this->load->helper(array('form', 'url'));
      
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';//menentukan format file
        $config['file_name']            = $this->id;
        $config['overwrite']			= true;//menindih file yg sudah di upload saat di upload file baru
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    
}



?>