<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <title><?= $judul; ?></title>
    <style>
        .custom-navbar {
            background-color: #FFDE59 !important;
            height: 100px; /* Tetapkan tinggi navbar */
        }
        .navbar .logo {
            max-height: 800px; /* Sesuaikan tinggi maksimal logo */
            width: 350px; /* Menjaga proporsi logo */
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar">
    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" class="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('user/berita'); ?>">Berita</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('user/profil'); ?>">Profil</a>
            </li>
            <!-- Dropdown untuk Pelayanan -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('user/pelayanan'); ?>">Pelayanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/galeri'); ?>">Galeri</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data & Informasi</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('user/informasi/gedungskkt'); ?>">Gedung SKKT</a>
                    <a class="dropdown-item" href="<?= base_url('user/informasi/karangtaruna'); ?>">Karang Taruna</a>
                    <a class="dropdown-item" href="<?= base_url('user/informasi/pmks'); ?>">PMKS</a>
                    <a class="dropdown-item" href="<?= base_url('user/informasi/jackpreneur'); ?>">JACKPRENEUR</a>
                    <a class="dropdown-item" href="<?= base_url('user/informasi/rawanbencana'); ?>">Daerah Rawan Bencana</a>
                    <a class="dropdown-item" href="<?= base_url('user/informasi/dataabf'); ?>">Alat Bantu Fisik</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Optional JavaScript -->
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
