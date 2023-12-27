<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kblimodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data kbli
    public function get_all_kbli() {
        $query = $this->db->get('kbli');
        return $query->result_array();
    }

    // Mendapatkan data kbli berdasarkan id
    public function get_kbli_by_id($id) {
        $query = $this->db->get_where('kbli', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data kbli
    public function insert_kbli($data) {
        $this->db->insert('kbli', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data kbli berdasarkan id
    public function update_kbli($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('kbli', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data kbli berdasarkan id
    public function delete_kbli($id) {
        $this->db->where('id', $id);
        $this->db->delete('kbli');
        return $this->db->affected_rows();
    }
}
?>
