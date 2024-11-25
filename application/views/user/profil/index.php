<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <!-- Cek apakah ada data profil -->
            <?php if (!empty($profiles)) : ?>
                <?php foreach ($profiles as $index => $item): ?>
                    <div class="row my-4 align-items-center">
                        <?php if ($index % 2 == 0): ?>
                            <!-- Baris Genap: Text di kiri, Gambar di kanan -->
                            <div class="col-md-6 text-center" data-aos="fade-right">
                                <h2><?= $item->judul ?></h2>
                                <p><?= $item->deskripsi ?></p>
                            </div>
                            <div class="col-md-6 text-center" data-aos="fade-left">
                                <?php if (!empty($item->gambar)): ?>
                                    <img src="<?= base_url('uploads/' . $item->gambar) ?>" class="img-fluid rounded" alt="Gambar Profil">
                                <?php else: ?>
                                    <span>Tidak ada gambar</span>
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <!-- Baris Ganjil: Gambar di kiri, Text di kanan -->
                            <div class="col-md-6 text-center" data-aos="fade-right">
                                <?php if (!empty($item->gambar)): ?>
                                    <img src="<?= base_url('uploads/' . $item->gambar) ?>" class="img-fluid rounded" alt="Gambar Profil">
                                <?php else: ?>
                                    <span>Tidak ada gambar</span>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 text-center" data-aos="fade-left">
                                <h2><?= $item->judul ?></h2>
                                <p><?= $item->deskripsi ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center mt-4">
                    <h5>Tidak ada data profil yang tersedia.</h5>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- Tambahkan script AOS untuk animasi -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Durasi animasi dalam milidetik
        once: true // Hanya animasi satu kali
    });
</script>

<!-- Tambahkan CSS untuk styling -->
<style>
    .content-wrapper {
        padding: 20px 0;
    }
    .row {
        margin-bottom: 20px;
    }
    img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
    h2 {
        font-weight: bold;
        color: #333;
    }
    p {
        font-size: 16px;
        color: #666;
        line-height: 1.5;
    }
</style>
