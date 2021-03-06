<?php 

class Chirp_model extends CI_Model{

    public function post($data){
        return $this->db->insert('chirps',$data);
    }

    public function getChirps(){
        $this->db->select('*');
        $this->db->from('chirps');
        $this->db->order_by('chirp_id','DESC');
        $query = $this->db->get();
        return $query->result();   
    }
}