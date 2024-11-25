<div class="container-fluid">
    <h1 class="text-center"><?= $judul; ?></h1>
    <a href="<?= site_url('admingaleri/create'); ?>" class="btn btn-success mb-3">Tambah Galeri</a>

    <?php if (!empty($galeri_by_month)): ?>
        <?php foreach ($galeri_by_month as $month => $galeri_list): ?>
            <h3 class="mt-4"><?= $month; ?></h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($galeri_list as $galeri): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <img src="<?= base_url($galeri['gambar']); ?>" alt="<?= $galeri['judul']; ?>" style="width: 100px; height: auto;">
                            </td>
                            <td><?= $galeri['judul']; ?></td>
                            <td><?= strlen($galeri['deskripsi']) > 50 ? substr($galeri['deskripsi'], 0, 50) . '...' : $galeri['deskripsi']; ?></td>
                            <td><?= date('d M Y', strtotime($galeri['tanggal_upload'])); ?></td>
                            <td>
                                <a href="<?= site_url('admingaleri/edit/' . $galeri['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= site_url('admingaleri/delete/' . $galeri['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center">Belum ada galeri yang ditambahkan.</p>
    <?php endif; ?>
</div>
