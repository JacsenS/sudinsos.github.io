<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminprofil extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Profil_model');
    }

    public function index() {
        $data['judul'] = 'Admin - Kelola Profil';
        $data['profiles'] = $this->Profil_model->get_all_profiles();
        
        // Memuat tampilan header dan sidebar
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/profil/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function add() {
        $data['judul'] = 'Tambah Profil';
        
        if ($this->input->post()) {
            $data_insert = [
                'judul' => $this->input->post('judul') ?: null,
                'deskripsi' => $this->input->post('deskripsi') ?: '', // Menghindari nilai NULL
                'gambar' => $this->_upload_image() ?: null
            ];

            $this->Profil_model->insert_profile($data_insert);
            redirect('adminprofil');
        }

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/profil/add', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function edit($id) {
        $data['judul'] = 'Edit Profil';
        $data['profile'] = $this->Profil_model->get_profile($id);

        if ($this->input->post()) {
            $data_update = [
                'judul' => $this->input->post('judul') ?: null,
                'deskripsi' => $this->input->post('deskripsi') ?: '', 
            ];

            if (!empty($_FILES['gambar']['name'])) {
                $data_update['gambar'] = $this->_upload_image();
            }

            $this->Profil_model->update_profile($id, $data_update);
            redirect('adminprofil');
        }

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/profil/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function delete($id) {
        $this->Profil_model->delete_profile($id);
        redirect('adminprofil');
    }

    private function _upload_image() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = uniqid();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name'); // Hanya nama file
        } else {
            echo 'Upload gagal: ' . $this->upload->display_errors();
            return null; // Jika upload gagal
        }
    }
}