<h1><?= $judul ?></h1>
<form action="<?= base_url('adminberita/store') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Isi</label>
        <textarea name="konten" class="form-control" required></textarea> <!-- Ubah 'isi' menjadi 'konten' -->
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('adminberita') ?>" class="btn btn-secondary">Kembali</a>
</form>
