<?php

class Model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllData($table){
        $query = $this->db->get($table);
        return $query;
    }
    public function insert($table, $data){
        if($this->db->insert($table, $data)){
            return true;
        }else{
            return false;
        }

    }

    public function select_by($id){
        $this->db->from('demo_data')->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update($table, $data, $id){
        $this->db->where('id', $id);
        if($this->db->update($table, $data)){
            return true;
        }else{
            return false;
        }

    }

    public function delete($id){
        if($this->db->delete('demo_data', array('id' => $id))){
            return true;
        }else{
            return false;
        }

    }
}