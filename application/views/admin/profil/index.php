<div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <a href="<?= base_url('adminprofil/add') ?>" class="btn btn-primary">Tambah Profil</a>
            </div>
            <div class="box-body">
            <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($profiles)) : ?>
                            <?php foreach ($profiles as $item): ?>
                            <tr>
                            
                                <td><?= $item->judul ?></td>
                                <td><?= $item->deskripsi ?></td>
                                <td>
                                    <?php if (!empty($item->gambar)): ?>
                                        <img src="<?= base_url('uploads/' . $item->gambar) ?>" width="100" alt="Gambar Profil">
                                    <?php else: ?>
                                        <span>Tidak ada gambar</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('adminprofil/edit/' . $item->id) ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('adminprofil/delete/' . $item->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data tersedia dalam tabel.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
