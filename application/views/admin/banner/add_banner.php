<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Banner</h1>
    </section>

    <section class="content">
        <?php if(isset($error)) { echo '<p class="text-danger">'.$error.'</p>'; } ?>
        <?php echo form_open_multipart('adminbanner/create'); ?>
            <div class="form-group">
                <label for="image">Upload Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="order">Urutan Tampilan</label>
                <input type="number" name="order" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Banner</button>
        <?php echo form_close(); ?>
    </section>
</div>
