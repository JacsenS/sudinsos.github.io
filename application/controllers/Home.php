<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['judul'] = 'Halaman Home';
        
        // Memuat model Banner_model
        $this->load->model('Banner_model');
        
        // Mengambil 3 banner untuk ditampilkan di home
        $data['banners'] = $this->Banner_model->get_home_banners();

        // Memuat model Berita_model
        $this->load->model('Berita_model');

        // Mengambil berita utama dan berita terbaru
        $data['berita_utama_home'] = $this->Berita_model->get_berita_utama_home();
        $data['berita_terbaru_home'] = $this->Berita_model->get_berita_terbaru_home();

        // Memuat view dengan data banner dan berita
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/home/index', $data); // Mengirim data banner dan berita ke view home
        $this->load->view('templates/user/footer');
    }
}
