<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resikomodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data resiko
    public function get_all_resiko() {
        $query = $this->db->get('resiko');
        return $query->result_array();
    }

    // Mendapatkan data resiko berdasarkan id
    public function get_resiko_by_id($id) {
        $query = $this->db->get_where('resiko', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data resiko
    public function insert_resiko($data) {
        $this->db->insert('resiko', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data resiko berdasarkan id
    public function update_resiko($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('resiko', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data resiko berdasarkan id
    public function delete_resiko($id) {
        $this->db->where('id', $id);
        $this->db->delete('resiko');
        return $this->db->affected_rows();
    } 
    public function hitung(){
        return $this->db->count_all('resiko');
    }
}
?>
