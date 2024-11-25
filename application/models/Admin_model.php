<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function login($username, $password) {
        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row();

        if ($admin && password_verify($password, $admin->password)) {
            return $admin;
        } else {
            return false;
        }
    }
}
