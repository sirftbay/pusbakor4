<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenisperusahaan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('jenisperusahaanmodel');
    }

    // Mendapatkan semua data jenisperusahaan
    public function index() {
        $data['jenisperusahaan'] = $this->jenisperusahaanmodel->get_all_jenisperusahaan();
        $data['judul'] = "Data jenisperusahaan";
        $data['content']=$this->load->view('jenisperusahaanview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data jenisperusahaan berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $jenisperusahaan = $this->jenisperusahaan->get_jenisperusahaan_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($jenisperusahaan));
    }

    // Menambahkan data jenisperusahaan
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel jenisperusahaan
        );

        $result = $this->jenisperusahaanmodel->insert_jenisperusahaan($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data jenisperusahaan berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel jenisperusahaan
        );

        $result = $this->jenisperusahaanmodel->update_jenisperusahaan($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data jenisperusahaan berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->jenisperusahaanmodel->delete_jenisperusahaan($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['jenisperusahaan'] = $this->jenisperusahaanmodel->get_jenisperusahaan_by_id($id);
        $this->load->view('editjenisperusahaan', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'jenisperusahaan' => $this->input->post('jenisperusahaan'),
            // Tambahkan field lainnya sesuai dengan struktur tabel jenisperusahaan
        );
    
        $result = $this->jenisperusahaanmodel->update_jenisperusahaan($id, $data);
    
        if ($result) {
            redirect('jenisperusahaan/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data 
        $result = $this->jenisperusahaanmodel->delete_jenisperusahaan($id);
        
        if ($result) {
            redirect('jenisperusahaan/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahjenisperusahaan');
    }
    
    public function insert() {
        $data = array(
            'jenisperusahaan' => $this->input->post('jenisperusahaan'),
            // Tambahkan field lainnya sesuai dengan struktur tabel jenisperusahaan
        );
    
        $result = $this->jenisperusahaanmodel->insert_jenisperusahaan($data);
    
        if ($result) {
            redirect('jenisperusahaan/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>