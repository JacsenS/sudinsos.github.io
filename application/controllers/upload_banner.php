public function upload_banner() {
    // Set konfigurasi upload
    $config['upload_path'] = './uploads/banners/'; // Path tujuan (folder upload)
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
    $config['max_size'] = 2048; // Ukuran maksimal file dalam kilobyte (2MB)
    $config['file_name'] = uniqid(); // Nama file unik untuk menghindari bentrok

    // Memuat library upload dengan konfigurasi di atas
    $this->load->library('upload', $config);

    // Jika upload gagal
    if (!$this->upload->do_upload('banner_image')) {
        // Menampilkan error
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
    } else {
        // Jika upload berhasil
        $data = $this->upload->data();
        // Menyimpan data file yang diupload ke database
        $image_path = $data['file_name'];
        // Lakukan proses penyimpanan ke database
    }
}
