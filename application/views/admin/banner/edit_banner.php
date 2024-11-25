<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo $judul; ?></h1>
    </section>

    <section class="content">
        <form action="" method="POST">
            <div class="form-group">
                <label for="order">Urutan Tampil</label>
                <input type="number" name="order" class="form-control" id="order" value="<?php echo $banner->display_order; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </section>
</div>
