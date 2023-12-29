<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model atau helper jika diperlukan
        $this->load->model('proyekmodel');
        $this->load->model('perusahaanmodel');
        $this->load->model('modalmodel');
        $this->load->model('kecamatanmodel');
        $this->load->model('desa_model');
        $this->load->model('skalamodel');
        $this->load->model('resikomodel');
    }

    public function index()
    {
        $data['modal'] = $this->modalmodel->hitung();
        $data['proyek'] = $this->proyekmodel->hitung();
        $data['perusahaan'] = $this->perusahaanmodel->hitung();
        $data['kecamatan'] = $this->kecamatanmodel->hitung();
        $data['desa'] = $this->desa_model->hitung();
        $data['resiko'] = $this->resikomodel->hitung();
        $data['skala'] = $this->skalamodel->hitung();

        $data['judul'] = "DASHBOARD";
        $data['content']= $this->load->view('dashboard_view', $data,true);
        $this->load->view('template/index',$data);
        // Load view dengan data yang telah diproses
    }
}
