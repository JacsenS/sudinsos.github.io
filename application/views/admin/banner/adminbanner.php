<div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="content">
        <a href="<?php echo site_url('adminbanner/create'); ?>" class="btn btn-primary">Tambah Banner</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Gambar</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($banners as $banner): ?>
        <tr>
            <td><img src="<?php echo $banner->image_url; ?>" width="100"></td>
            <td><?php echo $banner->image_name; ?></td>
            <td><?php echo $banner->display_order; ?></td>
            <td>
            <a href="<?php echo site_url('adminbanner/edit/'.$banner->id_banner); ?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo site_url('adminbanner/delete/'.$banner->id_banner); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus banner ini?')">Hapus</a>

            </td>
        </tr>
    <?php endforeach; ?>
</tbody>

        </table>
    </section>
</div>

