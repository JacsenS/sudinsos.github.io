
<a href="<?= base_url('adminberita/create') ?>" class="btn btn-primary">Tambah Berita</a>
<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berita as $item): ?>
        <tr>
            <td><?= $item['judul'] ?></td>
            <td><?= $item['tanggal'] ?></td>
            <td>
            <?php if ($item['gambar']): ?>
                <img src="<?= base_url('assets/images/' . $item['gambar']) ?>" alt="<?= $item['judul'] ?>" style="width: 100px;">
            <?php else: ?>
                <span>Tidak ada gambar</span>
            <?php endif; ?>
        </td>
            <td>
                <a href="<?= base_url('adminberita/edit/'.$item['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('adminberita/delete/'.$item['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
