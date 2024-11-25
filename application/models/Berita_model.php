<?php
class Berita_model extends CI_Model {

    // Mendapatkan semua berita
    public function get_all_berita() {
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get('berita')->result_array();
    }

    // Membuat berita baru
    public function create_berita($data) {
        return $this->db->insert('berita', $data);
    }

    // Mendapatkan berita berdasarkan ID
    public function get_berita_by_id($id) {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }

    // Mengupdate berita berdasarkan ID
    public function update_berita($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('berita', $data);
    }

    // Menghapus berita berdasarkan ID
    public function delete_berita($id) {
        $this->db->where('id', $id);
        return $this->db->delete('berita');
    }

    // Mendapatkan berita utama (berita yang memiliki gambar)
    public function get_berita_utama() {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->where('gambar IS NOT NULL');
        return $this->db->get('berita')->result_array();
    }

    // Mendapatkan 5 berita terbaru berdasarkan tanggal
    public function get_berita_terbaru() {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(10);
        return $this->db->get('berita')->result_array();
    }

    public function get_berita_utama_home() {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(1);
        $this->db->where('gambar IS NOT NULL');
        return $this->db->get('berita')->result_array();
    }

    public function get_berita_terbaru_home() {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(8);
        return $this->db->get('berita')->result_array();
    }
}
