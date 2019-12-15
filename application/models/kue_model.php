<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kue_model extends CI_Model {
    public function getKue($id = null){
        // return $this->db->get('mahasiswa')->result_array();
        if($id === null){
        
        return $this->db->get('kue')->result_array();
        } else {
            return $this->db->get_where('kue', ['id_kue' => $id])->result_array();
        }
    }

    public function getKueKering(){
        return $this->db->get_where('kue', ['id_kategori' => '1'])->result_array();
    }

    public function getKueBasah(){
        return $this->db->get_where('kue', ['id_kategori' => '2'])->result_array();
    }


    public function deleteKue($id){
        $this->db->delete('kue',['id_kue'=> $id]);
        return $this->db->affected_rows();
    }
   
    public function createKue($data){
        $this->db->insert('kue',$data);
        return $this->db->affected_rows();
        
    }

    public function updateKue($data,$id){
        $this->db->update('kue',$data, ['id_kueS'=>$id]);
        return $this->db->affected_rows();
        
    }
}

/* End of file mahasiswa_model.php */
?>