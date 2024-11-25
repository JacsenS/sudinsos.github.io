<div class="container mt-4">
    <h2 class="text-center mb-4"><?= $galeri['judul']; ?></h2>

    <!-- Gambar -->
    <div class="text-center">
        <img src="<?= base_url($galeri['gambar']); ?>" class="img-fluid mb-3" alt="<?= $galeri['judul']; ?>">
    </div>

    <!-- Deskripsi dan Tanggal Upload -->
    <div>
        <p style="text-align: justify;">
            <?= $galeri['deskripsi']; ?>
        </p>
        <p><strong>Tanggal Upload:</strong> <?= date('d M Y', strtotime($galeri['tanggal_upload'])); ?></p>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-4 text-center">
        <a href="<?= site_url('user/galeri'); ?>" class="btn btn-secondary">Kembali</a>
    </div>
</div>
