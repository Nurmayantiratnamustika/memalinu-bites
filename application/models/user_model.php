<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

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

    
  

    public function getAllKueKering(){
   
        $response =$this->_client->request('GET','Kue',[
            'query' => [
                'bakery-key' => 'bakery123',
                'id_kategori' => '1'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(),true);
        return $result['data'];
    }

    
    public function getAllKueBasah(){
   
        $response =$this->_client->request('GET','Kue',[
            'query' => [
                'bakery-key' => 'bakery123',
                'id_kategori' => '2'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(),true);
        return $result['data'];
    }

}
   ?> 