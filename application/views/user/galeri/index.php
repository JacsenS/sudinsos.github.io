<div class="container mt-4">
    <h2 class="text-center mb-4">Galeri</h2>

    <?php
    // Loop untuk menampilkan galeri per kategori bulan
    $galeri = $this->Galeri_model->get_galeri_by_month(); // Ambil data galeri yang dikelompokkan per bulan
    foreach ($galeri as $bulan => $items) {
        echo '<h3 class="mt-4">' . $bulan . '</h3>';
        echo '<div class="row">';

        $count = 0;
        foreach ($items as $item) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="' . base_url($item['gambar']) . '" class="card-img-top gallery-img" alt="' . $item['judul'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $item['judul'] . '</h5>';
            // Ganti 'tanggal' menjadi 'tanggal_upload'
            echo '<p class="card-text">' . date('d M Y', strtotime($item['tanggal_upload'])) . '</p>';
            echo '<a href="' . site_url('user/galeri/detail/' . $item['id']) . '" class="btn btn-primary">Lihat Selengkapnya</a>';
            echo '</div></div></div>';

            $count++;
            if ($count % 3 == 0) {
                echo '</div><div class="row">';
            }
        }

        echo '</div>'; // Tutup div.row untuk setiap bulan
    }
    ?>
</div>
