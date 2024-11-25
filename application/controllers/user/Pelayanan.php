<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {
    public function index() {
        $data['judul'] = 'halaman pelayanan';
        // Load view dengan data berita
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/pelayanan/index', $data);
        $this->load->view('templates/user/footer', $data);
    }
}