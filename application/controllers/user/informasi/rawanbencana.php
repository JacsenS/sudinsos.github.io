<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawanbencana extends CI_Controller {
    public function index() {
        $data['judul'] = 'halaman alat bantu fisik';
        // Load view dengan data berita
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/informasi/rawanbencana/index', $data);
        $this->load->view('templates/user/footer', $data);
    }
}