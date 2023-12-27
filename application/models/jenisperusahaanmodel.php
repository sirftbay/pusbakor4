<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenisperusahaanmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data desa
    public function get_all_jenisperusahaan() {
        $query = $this->db->get('jenisperusahaan');
        return $query->result_array();
    }

    // Mendapatkan data desa berdasarkan id
    public function get_jenisperusahaan_by_id($id) {
        $query = $this->db->get_where('jenisperusahaan', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data desa
    public function insert_jenisperusahaan($data) {
        $this->db->insert('jenisperusahaan', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data desa berdasarkan id
    public function update_jenisperusahaan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('jenisperusahaan', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data desa berdasarkan id
    public function delete_jenisperusahaan($id) {
        $this->db->where('id', $id);
        $this->db->delete('jenisperusahaan');
        return $this->db->affected_rows();
    }
}
?>
