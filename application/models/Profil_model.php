<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {
    
    public function get_all_profiles() {
        return $this->db->get('profil')->result();
    }

    public function get_profile($id) {
        return $this->db->get_where('profil', ['id' => $id])->row();
    }

    public function insert_profile($data) {
        return $this->db->insert('profil', $data);
    }

    public function update_profile($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('profil', $data);
    }

    public function delete_profile($id) {
        return $this->db->delete('profil', ['id' => $id]);
    }
}
