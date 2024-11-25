<?php

class Galeri extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Galeri_model');
    }

    // Menampilkan halaman galeri dengan gambar-gambar yang dikelompokkan per bulan
    public function index() {
        $data['judul'] = 'Galeri';
        $data['galeri_by_month'] = $this->Galeri_model->get_galeri_by_month();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/galeri/index', $data);
        $this->load->view('templates/user/footer');
    }

    // Menampilkan detail galeri berdasarkan ID
    public function detail($id) {
        $data['galeri'] = $this->Galeri_model->get_galeri_by_id($id);

        if (!$data['galeri']) {
            show_404();
        }

        $data['judul'] = 'Detail Galeri';

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/galeri/detail', $data);
        $this->load->view('templates/user/footer');
    }
}
