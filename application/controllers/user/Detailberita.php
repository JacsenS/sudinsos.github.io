<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBerita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index($id) {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);
        
        // Cek jika berita tidak ditemukan
        if (empty($data['berita'])) {
            show_404(); // Tampilkan halaman 404 jika berita tidak ditemukan
        }

        $data['judul'] = $data['berita']['judul'];
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/berita/detail', $data);
        $this->load->view('templates/user/footer');
    }
}
