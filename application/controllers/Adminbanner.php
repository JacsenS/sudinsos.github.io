<?php

class Adminbanner extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Banner_model');
        $this->load->helper(array('form', 'url'));
        

       // Cek apakah admin sudah login
       if (!$this->session->userdata('admin_logged_in')) {
        redirect('admin/login'); // Arahkan ke halaman login jika belum login
    }
        
    }

    public function index() {
        // Ambil semua banner
        $data['judul'] = 'Kelola Banner';
        $data['banners'] = $this->Banner_model->get_all_banners();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/banner/adminbanner', $data);
        $this->load->view('templates/admin/footer');
    }

    public function create() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $data['error'] = $this->upload->display_errors();
            $data['judul'] = 'Tambah Banner';
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('admin/banner/add_banner', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $fileData = $this->upload->data();
            $image_name = $fileData['file_name'];
            $image_url = base_url('uploads/' . $image_name);
            $order = $this->input->post('order');

            $data = array(
                'image_name' => $image_name,
                'image_url' => $image_url,
                'display_order' => $order
            );

            // Simpan data banner
            $this->Banner_model->insert_image($data);
            redirect('adminbanner');
        }
    }

    public function edit($id) {
        $data['banner'] = $this->Banner_model->get_banner_by_id($id);
        $data['judul'] = 'Edit Banner';

        if ($this->input->post()) {
            $order = $this->input->post('order');
            $data = array(
                'display_order' => $order
            );

            // Perbarui banner
            $this->Banner_model->update_banner($id, $data);
            redirect('adminbanner');
        }

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/banner/edit_banner', $data);
        $this->load->view('templates/admin/footer');
    }

    public function delete($id) {
        // Hapus banner
        $this->Banner_model->delete_banner($id);
        redirect('adminbanner');
    }
}
