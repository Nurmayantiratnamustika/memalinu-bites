<?php


defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;
class model_invoice extends CI_Model {
        private $_client;
        public function __construct()
        {
        $this->_client =  new Client([
            'base_uri' => 'http://localhost:8080/kue/index.php/api/',
            'auth' => ['admin','1234']
        ]);
    
            
        }
        
    
        public function getKueById($id){
       
            $response =$this->_client->request('GET','Kue',[
                'query' => [
                    'bakery-key' => 'bakery123',
                    'id_kue' => $id
                ]
            ]);
            $result = json_decode($response->getbody()->getContents(),true);
            return $result['data'][0];
        }




  public function index(){
      $usr=$this->session->userdata('id');
      date_default_timezone_set('Asia/Jakarta');
      
      $invoice = array(
          'id_customer' => $usr,
          'tanggal_pesan' => date('Y-m-d H:i:s'),
          'batas_bayar' => date('Y-m-d H:i:s',mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
      );
      $this->db->insert('order', $invoice);
      $id_invoice = $this->db->insert_id();

      foreach($this->cart->contents() as $item){
          $data= array(
              'id_order' => $id_invoice,
               'id_kue' => $item['id'],
               'jumlah' => $item['qty'],
               'subtotal' => $item['subtotal']
              
          );
          $this->db->insert('order_item', $data);
          
      }
      return true;
  }

  public function tampil_data(){
      $result = $this->db->get('order');
      if($result->num_rows() > 0){
          return $result->result();
      }
      else{
          return false;
      }
      
  }

  public function ambil_invoice($id){
      $result = $this->db->where('id_order', $id)->limit(1)->get('order');
      if($result->num_rows() > 0){
          return $result->row_array();
      }
      else{
          return false;
      }
    
  }
  public function ambil_pesan($id){
    $result = $this->db->where('id_order', $id)->get('order_item');
    if($result->num_rows() > 0){
        return $result->result_array();
        
    }
    else{
        return false;
    }
  
}



}

/* End of file transaksi.php */


