<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data desa
    public function get_all_desa() {
        $query = $this->db->get('desa');
        return $query->result_array();
    }

    // Mendapatkan data desa berdasarkan id
    public function get_desa_by_id($id) {
        $query = $this->db->get_where('desa', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data desa
    public function insert_desa($data) {
        $this->db->insert('desa', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data desa berdasarkan id
    public function update_desa($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('desa', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data desa berdasarkan id
    public function delete_desa($id) {
        $this->db->where('id', $id);
        $this->db->delete('desa');
        return $this->db->affected_rows();
    }
}
?>
