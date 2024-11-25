<div class="content-wrapper">
    <section class="content-header">
        <h1><?= $judul ?></h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Judul (Opsional)</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi (Opsional)</label>
                        <textarea name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar (Opsional)</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('adminprofil') ?>" class="btn btn-default">Kembali</a>
                </form>
            </div>
        </div>
    </section>
</div>
