<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resiko extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('resikomodel');
    }

    // Mendapatkan semua data resiko
    public function index() {
        $data['resiko'] = $this->resikomodel->get_all_resiko();
        $data['judul'] = "Data resiko";
        $data['content']=$this->load->view('resikoview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data resiko berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $resiko = $this->resikomodel->get_resiko_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($resiko));
    }

    // Menambahkan data resiko
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel resiko
        );

        $result = $this->resikomodel->insert_resiko($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data resiko berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel resiko
        );

        $result = $this->resikomodel->updateresiko($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data resiko berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->resikomodel->delete_resiko($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['resiko'] = $this->resikomodel->get_resiko_by_id($id);
        $this->load->view('editresiko', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'resiko' => $this->input->post('resiko'),
            // Tambahkan field lainnya sesuai dengan struktur tabel resiko
        );
    
        $result = $this->resikomodel->update_resiko($id, $data);
    
        if ($result) {
            redirect('resiko/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data resiko
        $result = $this->resikomodel->delete_resiko($id);
        
        if ($result) {
            redirect('resiko/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahresiko');
    }
    
    public function insert() {
        $data = array(
            'resiko' => $this->input->post('resiko'),
            // Tambahkan field lainnya sesuai dengan struktur tabel resiko
        );
    
        $result = $this->resikomodel->insert_resiko($data);
    
        if ($result) {
            redirect('resiko/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>