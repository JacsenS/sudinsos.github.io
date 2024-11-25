<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index() {
        $data['judul'] = 'Halaman Berita';  // Mengatur judul halaman
        // Mengambil data berita utama dari model
        $data['berita_utama'] = $this->Berita_model->get_berita_utama();

        // Mengambil data berita terbaru dari model
        $data['berita_terbaru'] = $this->Berita_model->get_berita_terbaru();

        // Load view dengan data berita
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/berita/index', $data);
        $this->load->view('templates/user/footer', $data);
    }
}
