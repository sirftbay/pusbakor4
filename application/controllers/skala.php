<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skala extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('skalamodel');
    }

    // Mendapatkan semua data skala
    public function index() {
        $data['skala'] = $this->skalamodel->get_all_skala();
        $data['judul'] = "Data skala";
        $data['content']=$this->load->view('skalaview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data skala berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $skala = $this->skalamodel->get_skala_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($skala));
    }

    // Menambahkan data skala
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel skala
        );

        $result = $this->skalamodel->insert_skala($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data skala berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel skala
        );

        $result = $this->skalamodel->updateskala($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data skala berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->skalamodel->delete_skala($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['skala'] = $this->skalamodel->get_skala_by_id($id);
        $this->load->view('editskala', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'skala' => $this->input->post('skala'),
            // Tambahkan field lainnya sesuai dengan struktur tabel skala
        );
    
        $result = $this->skalamodel->update_skala($id, $data);
    
        if ($result) {
            redirect('skala/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data skala
        $result = $this->skalamodel->delete_skala($id);
        
        if ($result) {
            redirect('skala/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahskala');
    }
    
    public function insert() {
        $data = array(
            'skala' => $this->input->post('skala'),
            // Tambahkan field lainnya sesuai dengan struktur tabel skala
        );
    
        $result = $this->skalamodel->insert_skala($data);
    
        if ($result) {
            redirect('skala/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>