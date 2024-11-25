<?php
class Banner_model extends CI_Model {

    // Fungsi untuk mengambil 3 banner yang sedang digunakan di home
    public function get_home_banners() {
        $this->db->order_by('display_order', 'ASC'); 
        $query = $this->db->get('tabel_banner');
        return $query->result();
    }

    // Fungsi untuk mengambil semua banner
    public function get_all_banners() {
        $this->db->order_by('display_order', 'ASC');
        $query = $this->db->get('tabel_banner');
        return $query->result(); 
    }    

    // Fungsi untuk menambah banner baru
    public function insert_image($data) {
        return $this->db->insert('tabel_banner', $data);
    }

    // Fungsi untuk mendapatkan detail banner tertentu
    public function get_banner_by_id($id) {
        // Ubah 'id' menjadi 'id_banner'
        $query = $this->db->get_where('tabel_banner', array('id_banner' => $id));
        return $query->row();
    }

    // Fungsi untuk mengupdate banner
    public function update_banner($id, $data) {
        // Ubah 'id' menjadi 'id_banner'
        $this->db->where('id_banner', $id);
        return $this->db->update('tabel_banner', $data);
    }

    // Fungsi untuk menghapus banner
    public function delete_banner($id) {
        // Ubah 'id' menjadi 'id_banner'
        $this->db->where('id_banner', $id);
        return $this->db->delete('tabel_banner');
    }
}
