<div class="container-fluid">
    <h1 class="m-0"><?= $berita['judul'] ?></h1>
    <p><?= $berita['konten'] ?></p>
    <?php if ($berita['gambar']): ?>
        <img src="<?= base_url('assets/images/' . $berita['gambar']) ?>" alt="<?= $berita['judul'] ?>" class="img-fluid">
    <?php endif; ?>
    <a href="<?= base_url('adminberita') ?>" class="btn btn-secondary">Kembali</a>
</div>
