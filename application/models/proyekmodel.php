<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proyekmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data proyek
    public function get_all_proyek() {
        $query = $this->db->get('proyek');
        return $query->result_array();
    }

    // Mendapatkan data proyek berdasarkan id
    public function get_proyek_by_id($id) {
        $query = $this->db->get_where('proyek', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data proyek
    public function insert_proyek($data) {
        $this->db->insert('proyek', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data proyek berdasarkan id
    public function update_proyek($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('proyek', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data proyek berdasarkan id
    public function delete_proyek($id) {
        $this->db->where('id', $id);
        $this->db->delete('proyek');
        return $this->db->affected_rows();
    }
}
?>
