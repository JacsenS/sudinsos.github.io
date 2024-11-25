<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cek apakah admin sudah login, jika tidak redirect ke halaman login
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer', $data);
    }
}
