<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBerita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
        // Cek login admin
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $data['berita'] = $this->Berita_model->get_all_berita();
        $data['judul'] = 'Kelola Berita';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/berita/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function create() {
        $data['judul'] = 'Tambah Berita';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/berita/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function store() {
        // Proses upload gambar
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;
        $config['file_name'] = time() . '-' . $_FILES['gambar']['name'];
        
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        } else {
            $gambar = NULL; // Jika tidak ada gambar yang diupload
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'konten' => $this->input->post('konten'),
            'gambar' => $gambar // Masukkan nama file gambar jika ada
        ];

        $this->Berita_model->create_berita($data);
        redirect('adminberita');
    }

    public function detail($id) {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);
        $data['judul'] = 'Detail Berita';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/berita/detail', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function edit($id) {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);
        $data['judul'] = 'Edit Berita';
        $data['isi'] = $data['berita']['konten']; // Ambil isi konten berita
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/berita/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function update($id) {
        // Ambil data berita lama berdasarkan ID
        $berita = $this->Berita_model->get_berita_by_id($id);
    
        // Proses upload gambar baru (jika ada)
        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '-' . $_FILES['gambar']['name'];
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('gambar')) {
                $gambar_baru = $this->upload->data('file_name');
            } else {
                // Jika gagal upload, tampilkan error dan kembalikan ke form edit
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('adminberita/edit/' . $id);
            }
        } else {
            // Jika tidak ada gambar baru yang diunggah, gunakan gambar lama
            $gambar_baru = $berita['gambar'];
        }
    
        // Data yang akan diupdate
        $data = [
            'judul' => $this->input->post('judul'),
            'konten' => $this->input->post('konten'),
            'gambar' => $gambar_baru // Gunakan gambar baru atau gambar lama
        ];
    
        // Lakukan update ke database
        $this->Berita_model->update_berita($id, $data);
    
        // Redirect ke halaman daftar berita setelah berhasil update
        $this->session->set_flashdata('success', 'Berita berhasil diperbarui.');
        redirect('adminberita');
    }
    

    public function delete($id) {
        $this->Berita_model->delete_berita($id);
        redirect('adminberita');
    }
}
