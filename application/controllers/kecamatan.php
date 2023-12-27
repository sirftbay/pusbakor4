<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kecamatan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('kecamatanmodel');
    }

    // Mendapatkan semua data kecamatan
    public function index() {
        $data['kecamatan'] = $this->kecamatanmodel->get_all_kecamatan();
        $data['judul'] = "Data kecamatan";
        $data['content']=$this->load->view('kecamatanview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data kecamatan berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $kecamatan = $this->kecamatanmodel->get_kecamatan_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($kecamatan));
    }

    // Menambahkan data kecamatan
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel kecamatan
        );

        $result = $this->kecamatanmodel->insert_kecamatan($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data kecamatan berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel kecamatan
        );

        $result = $this->kecamatanmodel->update_kecamatan($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data kecamatan berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->kecamatanmodel->delete_kecamatan($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['kecamatan'] = $this->kecamatanmodel->get_kecamatan_by_id($id);
        $this->load->view('editkecamatan', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'kecamatan' => $this->input->post('kecamatan'),
            // Tambahkan field lainnya sesuai dengan struktur tabel kecamatan
        );
    
        $result = $this->kecamatanmodel->update_kecamatan($id, $data);
    
        if ($result) {
            redirect('kecamatan/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data kecamatan
        $result = $this->kecamatanmodel->delete_kecamatan($id);
        
        if ($result) {
            redirect('kecamatan/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahkecamatan');
    }
    
    public function insert() {
        $data = array(
            'kecamatan' => $this->input->post('kecamatan'),
            // Tambahkan field lainnya sesuai dengan struktur tabel kecamatan
        );
    
        $result = $this->kecamatanmodel->insert_kecamatan($data);
    
        if ($result) {
            redirect('kecamatan/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>