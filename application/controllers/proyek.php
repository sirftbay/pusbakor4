<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proyek extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('proyekmodel');
    }

    // Mendapatkan semua data proyek
    public function index() {
        $data['proyek'] = $this->proyekmodel->get_all_proyek();
        $data['judul'] = "Data proyek";
        $data['content']=$this->load->view('proyekview', $data,true);
        $this->load->view('template/index',$data);
    }

    // Mendapatkan data proyek berdasarkan id
    public function index_post() {
        $id = $this->input->post('id');
        $proyek = $this->proyekmodel->get_proyek_by_id($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($proyek));
    }

    // Menambahkan data proyek
    public function index_put() {
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PUT
            // tambahkan field lainnya sesuai dengan struktur tabel proyek
        );

        $result = $this->proyekmodel->insert_proyek($data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Mengupdate data proyek berdasarkan id
    public function index_patch() {
        $id = $this->input->input_stream('id');
        $data = array(
            'nama' => $this->input->input_stream('nama'), // Menggunakan input_stream untuk PATCH
            // tambahkan field lainnya sesuai dengan struktur tabel proyek
        );

        $result = $this->proyekmodel->updateproyek($id, $data);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }

    // Menghapus data proyek berdasarkan id
    public function index_delete() {
        $id = $this->input->input_stream('id');
        $result = $this->proyekmodel->delete_proyek($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('status' => $result)));
    }
    public function edit($id) {
        // Logic untuk menampilkan formulir edit
        $data['proyek'] = $this->proyekmodel->get_proyek_by_id($id);
        $this->load->view('editproyek', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        
        $data = array(
            'noproyek' => $this->input->post('noproyek'),
            'longitude' => $this->input->post('longitude'),
            'latitude' => $this->input->post('latitude'),
            'invetasi' => $this->input->post('investasi'),
            'alamat' => $this->input->post('alamat'),
            'perusahaan_id' => $this->input->post('perusahaan_id'),
            'modal_id' => $this->input->post('modal_id'),
            'resiko_id' => $this->input->post('resiko_id'),
            'skala_id' => $this->input->post('skala_id'),
            'kecamatan_id' => $this->input->post('kecamatan_id'),
            'desa_id' => $this->input->post('desa_id'),
            'kbli_id' => $this->input->post('kbli_id'),



            // Tambahkan field lainnya sesuai dengan struktur tabel proyek
        );
    
        $result = $this->proyekmodel->update_proyek($id, $data);
    
        if ($result) {
            redirect('proyek/index');
        } else {
            echo "Failed to update.";
        }
    }
    
    
    public function delete($id) {
        // Logic untuk menghapus data proyek
        $result = $this->proyekmodel->delete_proyek($id);
        
        if ($result) {
            redirect('proyek/index');
        } else {
            echo "Failed to delete.";
        }
    }
    public function add() {
        $this->load->view('tambahproyek');
    }
    
    public function insert() {
        $data = array(
            'noproyek' => $this->input->post('noproyek'),
            'longitude' => $this->input->post('longitude'),
            'latitude' => $this->input->post('latitude'),
            'invetasi' => $this->input->post('investasi'),
            'alamat' => $this->input->post('alamat'),
            'perusahaan_id' => $this->input->post('perusahaan_id'),
            'modal_id' => $this->input->post('modal_id'),
            'resiko_id' => $this->input->post('resiko_id'),
            'skala_id' => $this->input->post('skala_id'),
            'kecamatan_id' => $this->input->post('kecamatan_id'),
            'desa_id' => $this->input->post('desa_id'),
            'kbli_id' => $this->input->post('kbli_id'),


            // Tambahkan field lainnya sesuai dengan struktur tabel proyek
        );
    
        $result = $this->proyekmodel->insert_proyek($data);
    
        if ($result) {
            redirect('proyek/index');
        } else {
            echo "Failed to insert.";
        }
    }
    
    
}
?>