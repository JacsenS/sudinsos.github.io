<?php

class Galeri_model extends CI_Model {

    public function add_galeri($data) {
        $this->db->insert('galeri', $data);
    }

    public function get_galeri_by_month() {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->order_by('tanggal_upload', 'DESC');
        $query = $this->db->get();
        $galeri = $query->result_array();

        $grouped = [];
        foreach ($galeri as $item) {
            $bulan = date('F Y', strtotime($item['tanggal_upload']));
            $grouped[$bulan][] = $item;
        }

        return $grouped;
    }

    public function get_galeri_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get('galeri')->row_array();
    }

    public function update_galeri($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('galeri', $data);
    }

    public function delete_galeri($id) {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
    }
}
