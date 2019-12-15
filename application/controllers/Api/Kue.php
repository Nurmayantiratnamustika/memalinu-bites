<?php

require APPPATH . '/libraries/REST_Controller.php';

class Kue extends REST_Controller
{ 
    public $image="default.jpg";
    public $id;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kue_model', 'kue');

        $this->methods['index_get']['limit'] = 500;
        $this->methods['index_post']['limit'] = 500;
        $this->methods['index_delete']['limit'] = 500;
        $this->methods['index_put']['limit'] = 500;
    }
    public function index_get()
    {
       // $mahasiswa = $this->mahasiswa->getMahasiswa();
        //var_dump($mahasiswa);
        $id = $this->get('id_kue');
        $id_kategori=$this->get('id_kategori');
    
        if($id_kategori =='1'){
            $kue = $this->kue->getKueKering();
        }
        else if($id_kategori == '2'){
            $kue = $this->kue->getKueBasah();
        }
        else if($id==null){
            $kue =  $this->kue->getKue();
        }
    
        else{

            $kue = $this->kue->getKue($id);
        }
        

        if($kue){
            $this->response([
                'status' => true,
                'data' => $kue
            ],REST_Controller::HTTP_OK);
        }else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],REST_Controller::HTTP_NOT_FOUND);
         }
        
    }


    function index_delete()
    {

        $id= $this->delete('id_kue');
        if($id == null){
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ],REST_Controller::HTTP_BAD_REQUEST);

        }else {
            if($this->kue->deleteKue($id) > 0){
                $this->response([
                    'status' => true,
                    'id_kue' => $id,
                    'messsage' => 'deleted'
                ],REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }

        // $nim = $this->delete('id');
        // $this->db->where('id', $nim);
        // $delete = $this->db->delete('mahasiswa');
        // if ($delete) {
        //     $this->response(array('status' => 'success'), 201);
        // } else {
        //     $this->response(array('status' => 'fail', 502));
        // }
    }

    public function index_post()
    {   
        
        $this->id = uniqid();
        $data = [
            'id_kue' => $this->post('id_kue'),
            'nama_kue' => $this->post('nama_kue'),
            'bahan' => $this->post('bahan'),
            'harga' => $this->post('harga'),
            'foto' => $this->_uploadImage(),
            'id_kategori' => $this->post('id_kategori')

        ];

        if ($this->kue->createKue($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new kue has been created.'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to create new kue!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        
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
    
    

    function index_put()
    {
        $id=$this->put('id_kue');
        $data = [
            'id_kue' => $this->put('id_kue'),
            'nama_kue' => $this->put('nama_kue'),
            'bahan' => $this->put('bahan'),
            'harga' => $this->put('harga'),
            'id_kategori' => $this->put('id_kategori')
        ];

        if ($this->kue->updateKue($data,$id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new kue has been updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
?>