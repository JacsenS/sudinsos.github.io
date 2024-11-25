<form action="<?= base_url('adminberita/update/' . $berita['id']) ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="judul">Judul Berita</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?= $berita['judul'] ?>">
    </div>
    <div class="form-group">
        <label for="konten">Isi Berita</label>
        <textarea class="form-control" id="konten" name="konten"><?= $berita['konten'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar Berita</label>
        <?php if ($berita['gambar']): ?>
            <img src="<?= base_url('assets/images/' . $berita['gambar']) ?>" alt="<?= $berita['judul'] ?>" class="img-fluid mb-3">
        <?php endif; ?>
        <input type="file" class="form-control-file" id="gambar" name="gambar">
    </div>
    <button type="submit" class="btn btn-primary">Update Berita</button>
</form>
