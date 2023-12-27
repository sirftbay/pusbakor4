<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skalamodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data skala
    public function get_all_skala() {
        $query = $this->db->get('skala');
        return $query->result_array();
    }

    // Mendapatkan data skala berdasarkan id
    public function get_skala_by_id($id) {
        $query = $this->db->get_where('skala', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data skala
    public function insert_skala($data) {
        $this->db->insert('skala', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data skala berdasarkan id
    public function update_skala($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('skala', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data skala berdasarkan id
    public function delete_skala($id) {
        $this->db->where('id', $id);
        $this->db->delete('skala');
        return $this->db->affected_rows();
    }
}
?>
