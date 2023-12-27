<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kecamatanmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data kecamatan
    public function get_all_kecamatan() {
        $query = $this->db->get('kecamatan');
        return $query->result_array();
    }

    // Mendapatkan data kecamatan berdasarkan id
    public function get_kecamatan_by_id($id) {
        $query = $this->db->get_where('kecamatan', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data kecamatan
    public function insert_kecamatan($data) {
        $this->db->insert('kecamatan', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data kecamatan berdasarkan id
    public function update_kecamatan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('kecamatan', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data kecamatan berdasarkan id
    public function delete_kecamatan($id) {
        $this->db->where('id', $id);
        $this->db->delete('kecamatan');
        return $this->db->affected_rows();
    }
}
?>
