<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function authenticate_user($username, $password) {
        // Example query, replace with your actual authentication logic
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return $query->row_array(); // Return user data
        } else {
            return false; // Authentication failed
        }
    }
}
