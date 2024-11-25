<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jackpreneur extends CI_Controller {
    public function index() {
        $data['judul'] = 'Halaman Jackpreneur';
        // Load view dengan data berita
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/informasi/jackpreneur/index', $data);
        $this->load->view('templates/user/footer', $data);
    }
}