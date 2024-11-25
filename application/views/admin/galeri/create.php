<div class="container-fluid">
    <h1 class="text-center"><?= $judul; ?></h1>
    <form action="<?= site_url('admingaleri/store'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar" required>
        </div>
        <div class="form-group">
            <label for="tanggal_upload">Tanggal Upload</label>
            <input type="date" name="tanggal_upload" class="form-control" id="tanggal_upload" value="<?= date('Y-m-d'); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
