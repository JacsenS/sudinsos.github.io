<div class="container mt-4">
    <h2>Detail Galeri</h2>
    <p><strong>Judul:</strong> <?php echo $galeri->judul; ?></p>
    <p><strong>Deskripsi:</strong> <?php echo $galeri->deskripsi; ?></p>
    <p><strong>Tanggal Upload:</strong> <?php echo $galeri->tanggal_upload; ?></p>
    <img src="<?php echo base_url('uploads/' . $galeri->gambar); ?>" alt="<?php echo $galeri->judul; ?>" class="img-fluid">
    <br><br>
    <a href="<?php echo site_url('AdminGaleri'); ?>" class="btn btn-secondary">Kembali</a>
</div>
