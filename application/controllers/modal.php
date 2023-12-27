<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('modalmodel');
    }

    // Mendapatkan semua data modal
    public function index() {
        $data['modal'] = $this->modalmodel->get_all_modal();
        $data['judul'] = "Data modal";
        $data['content']=$this->load->view('modalview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data modal berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $modal = $this->modalmodel->get_modal_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($modal));
    }

    // Menambahkan data modal
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel modal
        );

        $result = $this->modalmodel->insert_modal($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data modal berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel modal
        );

        $result = $this->modalmodel->update_modal($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data modal berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->modalmodel->delete_modal($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['modal'] = $this->modalmodel->get_modal_by_id($id);
        $this->load->view('editmodal', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'modal' => $this->input->post('modal'),
            // Tambahkan field lainnya sesuai dengan struktur tabel modal
        );
    
        $result = $this->modalmodel->update_modal($id, $data);
    
        if ($result) {
            redirect('modal/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data modal
        $result = $this->modalmodel->delete_modal($id);
        
        if ($result) {
            redirect('modal/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahmodal');
    }
    
    public function insert() {
        $data = array(
            'modal' => $this->input->post('modal'),
            // Tambahkan field lainnya sesuai dengan struktur tabel modal
        );
    
        $result = $this->modalmodel->insert_modal($data);
    
        if ($result) {
            redirect('modal/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>