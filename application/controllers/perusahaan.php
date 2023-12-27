<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perusahaan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('perusahaanmodel');
    }

    // Mendapatkan semua data perusahaan
    public function index() {
        $data['perusahaan'] = $this->perusahaanmodel->get_all_perusahaan();
        $data['judul'] = "Data perusahaan";
        $data['content']=$this->load->view('perusahaanview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data perusahaan berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $perusahaan = $this->perusahaanmodel->get_perusahaan_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($perusahaan));
    }

    // Menambahkan data perusahaan
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel perusahaan
        );

        $result = $this->perusahaanmodel->insert_perusahaan($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data perusahaan berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel perusahaan
        );

        $result = $this->perusahaanmodel->updateperusahaan($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data perusahaan berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->perusahaanmodel->delete_perusahaan($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['perusahaan'] = $this->perusahaanmodel->get_perusahaan_by_id($id);
        $this->load->view('editperusahaan', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'nib' => $this->input->post('nib'),
            'npwp' => $this->input->post('npwp'),
            'nama' => $this->input->post('nama'),
            'jenis_perusahaan_id' => $this->input->post('jenis_perusahaan_id'),


            // Tambahkan field lainnya sesuai dengan struktur tabel perusahaan
        );
    
        $result = $this->perusahaanmodel->update_perusahaan($id, $data);
    
        if ($result) {
            redirect('perusahaan/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data perusahaan
        $result = $this->perusahaanmodel->delete_perusahaan($id);
        
        if ($result) {
            redirect('perusahaan/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahperusahaan');
    }
    
    public function insert() {
        $data = array(
            'nib' => $this->input->post('nib'),
            'npwp' => $this->input->post('npwp'),
            'nama' => $this->input->post('nama'),
            'jenis_perusahaan_id' => $this->input->post('jenis_perusahaan_id'),


            // Tambahkan field lainnya sesuai dengan struktur tabel perusahaan
        );
    
        $result = $this->perusahaanmodel->insert_perusahaan($data);
    
        if ($result) {
            redirect('perusahaan/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>