<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Profil_model');
    }

    public function index() {
        $data['judul'] = 'Halaman Profil';
        $data['profiles'] = $this->Profil_model->get_all_profiles(); // Ambil semua data profil
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/profil/index', $data);
        $this->load->view('templates/user/footer');
    }
}
