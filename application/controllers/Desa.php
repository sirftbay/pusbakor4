<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Desa_model');
    }

    // Mendapatkan semua data desa
    public function index() {
        $data['desa'] = $this->Desa_model->get_all_desa();
        $data['judul'] = "Data Desa";
        $data['content']=$this->load->view('desa_view', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data desa berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $desa = $this->Desa_model->get_desa_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($desa));
    }

    // Menambahkan data desa
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel desa
        );

        $result = $this->Desa_model->insert_desa($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data desa berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel desa
        );

        $result = $this->Desa_model->update_desa($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data desa berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->Desa_model->delete_desa($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['desa'] = $this->Desa_model->get_desa_by_id($id);
        $this->load->view('edit_desa_view', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'desa' => $this->input->post('desa'),
            // Tambahkan field lainnya sesuai dengan struktur tabel desa
        );
    
        $result = $this->Desa_model->update_desa($id, $data);
    
        if ($result) {
            redirect('desa/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data desa
        $result = $this->Desa_model->delete_desa($id);
        
        if ($result) {
            redirect('desa/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambah_desa');
    }
    
    public function insert() {
        $data = array(
            'desa' => $this->input->post('desa'),
            // Tambahkan field lainnya sesuai dengan struktur tabel desa
        );
    
        $result = $this->Desa_model->insert_desa($data);
    
        if ($result) {
            redirect('desa/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>