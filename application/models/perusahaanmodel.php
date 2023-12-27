<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perusahaanmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data perusahaan
    public function get_all_perusahaan() {
        $query = $this->db->get('perusahaan');
        return $query->result_array();
    }

    // Mendapatkan data perusahaan berdasarkan id
    public function get_perusahaan_by_id($id) {
        $query = $this->db->get_where('perusahaan', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data perusahaan
    public function insert_perusahaan($data) {
        $this->db->insert('perusahaan', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data perusahaan berdasarkan id
    public function update_perusahaan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('perusahaan', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data perusahaan berdasarkan id
    public function delete_perusahaan($id) {
        $this->db->where('id', $id);
        $this->db->delete('perusahaan');
        return $this->db->affected_rows();
    }
}
?>
