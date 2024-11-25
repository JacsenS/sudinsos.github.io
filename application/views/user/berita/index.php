<div class="container mt-5">
    <h1 class="mb-4">Berita Utama</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="row"> <!-- Tambahkan row untuk membungkus berita utama -->
                <!-- Looping Berita Utama -->
                <?php if (!empty($berita_utama)): ?>
                    <?php foreach ($berita_utama as $berita): ?>
                        <div class="col-md-6 mb-4"> <!-- Ubah col-md-6 untuk dua kolom -->
                            <div class="card">
                                <!-- Ubah path gambar sesuai dengan lokasi gambar -->
                                <?php if ($berita['gambar']): ?>
                                    <img src="<?= base_url('assets/images/' . $berita['gambar']) ?>" class="card-img-top berita-img" alt="<?= $berita['judul'] ?>">
                                <?php else: ?>
                                    <img src="<?= base_url('assets/images/default-image.jpg') ?>" class="card-img-top berita-img" alt="Gambar Tidak Tersedia">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $berita['judul'] ?></h5>
                                    <a href="<?= base_url('user/detailberita/index/' . $berita['id']) ?>" class="btn btn-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada berita utama yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-4">
            <h4>Berita Terbaru</h4>
            <ul class="list-group">
                <!-- Looping Berita Terbaru -->
                <?php if (!empty($berita_terbaru)): ?>
                    <?php foreach ($berita_terbaru as $berita): ?>
                        <li class="list-group-item">
                            <a href="<?= base_url('user/detailberita/index/' . $berita['id']) ?>">
                                <?= $berita['judul'] ?> - <?= date('d M Y', strtotime($berita['tanggal'])) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="list-group-item">Tidak ada berita terbaru yang tersedia.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
