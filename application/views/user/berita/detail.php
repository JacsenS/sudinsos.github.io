<div class="container mt-5">
    <div class="text-center">
        <!-- Mengubah ukuran judul agar tidak terlalu besar -->
        <h2 class="fw-bold mb-4"><?= $berita['judul'] ?></h2>
        
        <?php if ($berita['gambar']): ?>
            <img src="<?= base_url('assets/images/' . $berita['gambar']) ?>" alt="<?= $berita['judul'] ?>" class="img-fluid mb-4">
        <?php else: ?>
            <img src="<?= base_url('assets/images/default-image.jpg') ?>" alt="Gambar Tidak Tersedia" class="img-fluid mb-4">
        <?php endif; ?>

        <!-- Menambahkan class untuk rata kiri dan kanan pada deskripsi -->
        <p class="text-justify"><?= $berita['konten'] ?></p>
        
        <!-- Mengatur warna teks tanggal menjadi abu-abu dengan Bootstrap class text-muted -->
        <p class="text-muted"><?= date('d M Y', strtotime($berita['tanggal'])) ?></p>

        <a href="<?= base_url('user/berita') ?>" class="btn btn-secondary">Kembali ke Berita</a>
    </div>
</div>
