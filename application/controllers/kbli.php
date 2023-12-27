<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kbli extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('kblimodel');
    }

    // Mendapatkan semua data kbli
    public function index() {
        $data['kbli'] = $this->kblimodel->get_all_kbli();
        $data['judul'] = "Data kbli";
        $data['content']=$this->load->view('kbliview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data kbli berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $kbli = $this->kblimodel->get_kbli_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($kbli));
    }

    // Menambahkan data kbli
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel kbli
        );

        $result = $this->kblimodel->insert_kbli($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data kbli berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel kbli
        );

        $result = $this->kblimodel->updatekbli($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data kbli berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->kblimodel->delete_kbli($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['kbli'] = $this->kblimodel->get_kbli_by_id($id);
        $this->load->view('editkbli', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'judul' => $this->input->post('judul'),
            'pembina' => $this->input->post('pembina'),

            // Tambahkan field lainnya sesuai dengan struktur tabel kbli
        );
    
        $result = $this->kblimodel->update_kbli($id, $data);
    
        if ($result) {
            redirect('kbli/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data kbli
        $result = $this->kblimodel->delete_kbli($id);
        
        if ($result) {
            redirect('kbli/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahkbli');
    }
    
    public function insert() {
        $data = array(
            'judul' => $this->input->post('judul'),
            'pembina' => $this->input->post('pembina'),

            // Tambahkan field lainnya sesuai dengan struktur tabel kbli
        );
    
        $result = $this->kblimodel->insert_kbli($data);
    
        if ($result) {
            redirect('kbli/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>