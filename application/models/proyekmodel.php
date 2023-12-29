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

    public function get_all_data() {
        $this->db->select('p1.id, p1.noproyek, p1.longitude, p1.latitude, p1.investasi, p1.alamat, perusahaan.nama, modal.modal, resiko.resiko, skala.skala, kecamatan.kecamatan, desa.desa, kbli.judul');
        $this->db->from('proyek p1');
        $this->db->join('perusahaan', 'p1.perusahaan_id = perusahaan.id');
        $this->db->join('modal', 'p1.modal_id = modal.id');
        $this->db->join('resiko', 'p1.resiko_id = resiko.id');
        $this->db->join('skala', 'p1.skala_id = skala.id');
        $this->db->join('kecamatan', 'p1.kecamatan_id = kecamatan.id');
        $this->db->join('desa', 'p1.desa_id = desa.id');
        $this->db->join('kbli', 'p1.kbli_id = kbli.id');
        $query = $this->db->get();

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
    public function hitung(){
        return $this->db->count_all('proyek');
    }
}
?>
