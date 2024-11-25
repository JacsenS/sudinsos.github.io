<?php

class Admingaleri extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->library('upload');
        
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $data['judul'] = 'Halaman Galeri';
        $data['galeri_by_month'] = $this->Galeri_model->get_galeri_by_month();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/galeri/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function create() {
        $data['judul'] = 'Tambah Galeri';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/galeri/create', $data);
        $this->load->view('templates/admin/footer');
    }

    public function store() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $data = [
                'judul' => $this->input->post('judul'),
                'gambar' => 'uploads/' . $upload_data['file_name'],
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal_upload' => $this->input->post('tanggal_upload') // Ambil tanggal dari form
            ];
            $this->Galeri_model->add_galeri($data);
            redirect('admingaleri');
        } else {
            $data['error'] = $this->upload->display_errors();
            $this->create();
        }
    }

    public function edit($id) {
        $data['judul'] = 'Edit Galeri';
        $data['galeri'] = $this->Galeri_model->get_galeri_by_id($id);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/galeri/edit', $data);
        $this->load->view('templates/admin/footer');
    }

    public function update($id) {
        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal_upload' => $this->input->post('tanggal_upload') // Ambil tanggal dari form
        ];

        if ($_FILES['gambar']['name']) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data['gambar'] = 'uploads/' . $upload_data['file_name'];
            }
        }

        $this->Galeri_model->update_galeri($id, $data);
        redirect('admingaleri');
    }

    public function delete($id) {
        $this->Galeri_model->delete_galeri($id);
        redirect('admingaleri');
    }
}
