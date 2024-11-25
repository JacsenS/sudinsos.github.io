<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function login() {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $admin = $this->Admin_model->login($username, $password);

            if ($admin) {
                // Set session data saat login berhasil
                $this->session->set_userdata('admin_logged_in', true);
                $this->session->set_userdata('admin_id', $admin->id);
                // Redirect ke dashboard setelah login berhasil
                redirect('dashboard'); // Pastikan rute ini mengarah ke controller Dashboard
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('admin/login');
            }
        }

        // Menampilkan halaman login
        $this->load->view('admin/login');
    }

    public function logout() {
        // Menghapus session saat logout
        $this->session->unset_userdata('admin_logged_in');
        redirect('admin/login'); // Kembali ke halaman login
    }
}
