<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php 
        $active = true; // Untuk mengatur item pertama menjadi "active"
        foreach ($banners as $banner): ?>
            <div class="carousel-item <?php if ($active) { echo 'active'; $active = false; } ?>">
                <img src="<?php echo $banner->image_url; ?>" class="d-block w-100" alt="<?php echo $banner->image_name; ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container my-5">
    <!-- Home Berita -->
<div class="main-content">
    <div class="row">
        <!-- Kolom Berita Utama -->
        <div class="col-md-8">
            <div class="news-title">
                <h1>Berita Utama</h1>
            </div>

            <?php if (!empty($berita_utama_home)): ?>
                <?php foreach ($berita_utama_home as $berita): ?>
                    <img src="<?= base_url('assets/images/' . $berita['gambar']) ?>" class="img-fluid news-image" alt="<?= $berita['judul'] ?>" />
                    <h2><?= $berita['judul'] ?></h2>
                    <a href="<?= base_url('user/detailberita/index/' . $berita['id']) ?>" class="btn btn-primary">Baca Selengkapnya</a>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Tidak ada berita utama yang tersedia.</p>
            <?php endif; ?>
        </div>

        <!-- Kolom Daftar Semua Berita -->
        <div class="col-md-4">
            <button class="btn btn-primary btn-view-all w-100" onclick="window.location.href='<?= base_url('user/berita') ?>'">
                Lihat Semua Berita
            </button>
            <div class="divider"></div>
            <ul class="news-list">
                <!-- Looping Berita Terbaru -->
                <?php if (!empty($berita_terbaru_home)): ?>
                    <?php foreach ($berita_terbaru_home as $berita): ?>
                        <li>
                            <a href="<?= base_url('user/detailberita/index/' . $berita['id']) ?>">
                                <?= $berita['judul'] ?>
                            </a>
                            <div class="news-date"><?= date('d M Y', strtotime($berita['tanggal'])) ?></div>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>Tidak ada berita terbaru yang tersedia.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>



</div>
<!-- card untuk link terkait -->
<!-- Related Links Section -->
<div class="container my-5">
    <h3>Link Terkait</h3>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card">
                <a href="https://aplikasi1.com">
                    <img src="<?php echo base_url('assets/images/berita1.jpg'); ?>" class="card-img-top" alt="Aplikasi 1">
                    <div class="card-body">
                        <h5 class="card-title">Sipegasus</h5>
                    </div>
                </a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card">
                <a href="https://aplikasi2.com">
                    <img src="<?php echo base_url('assets/images/berita1.jpg'); ?>" class="card-img-top" alt="Aplikasi 2">
                    <div class="card-body">
                        <h5 class="card-title">Web Dinsos</h5>
                    </div>
                </a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card">
                <a href="https://aplikasi3.com">
                    <img src="<?php echo base_url('assets/images/berita1.jpg'); ?>" class="card-img-top" alt="Aplikasi 3">
                    <div class="card-body">
                        <h5 class="card-title">Web Jakarta Barat</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
