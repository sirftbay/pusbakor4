<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modalmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data modal
    public function get_all_modal() {
        $query = $this->db->get('modal');
        return $query->result_array();
    }

    // Mendapatkan data modal berdasarkan id
    public function get_modal_by_id($id) {
        $query = $this->db->get_where('modal', array('id' => $id));
        return $query->row_array();
    }

    // Menambahkan data modal
    public function insert_modal($data) {
        $this->db->insert('modal', $data);
        return $this->db->affected_rows();
    }

    // Mengupdate data modal berdasarkan id
    public function update_modal($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('modal', $data);
        return $this->db->affected_rows();
    }

    // Menghapus data modal berdasarkan id
    public function delete_modal($id) {
        $this->db->where('id', $id);
        $this->db->delete('modal');
        return $this->db->affected_rows();
    }
}
?>
