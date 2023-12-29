<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        //auth model nya
        $this->load->model('loginmodel');
    }

    public function index() {
        $this->load->view('loginview');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Authenticate user using the model
        $user_data = $this->loginmodel->authenticate_user($username, $password);

        if ($user_data) {
            // Set user data in session
            $this->session->set_userdata($user_data);
            redirect('desa');
        } else {
            // Incorrect credentials, redirect back to login page
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login')); // Redirect to your login 
    }
    
}
