<div class="container">
    <h1 class="text-center"><?= $judul; ?></h1>
    <form action="<?= site_url('admingaleri/update/' . $galeri['id']); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $galeri['judul']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (biarkan kosong jika tidak diubah)</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required><?= $galeri['deskripsi']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_upload" class="form-label">Tanggal Upload</label>
            <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload" value="<?= date('Y-m-d', strtotime($galeri['tanggal_upload'])); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= site_url('admingaleri'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
