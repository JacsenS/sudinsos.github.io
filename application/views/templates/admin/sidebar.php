  <body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      
      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
        <span class="brand-text font-weight-light">SUDIN JAKBAR</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/images/profiladmin.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                  <a href="<?= base_url ('dashboard') ?>" class="nav-link">
                    <p>Dashboard</p>
                  </a>  
          <li class="nav-item">
                  <a href="<?= base_url('adminbanner') ?>" class="nav-link">
                    <p>Banner</p>
                  </a>
            <li class="nav-item">
                  <a href="<?= base_url('adminberita') ?>" class="nav-link">
                    <p>Berita</p>
                  </a>
            <li class="nav-item">
                  <a href="<?= base_url('adminprofil') ?>" class="nav-link">
                    <p>Profil</p>
                  </a>
            <li class="nav-item">
                  <a href="<?= base_url('admingaleri') ?>" class="nav-link">
                    <p>Galeri</p>
                  </a>
                </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      
  <!-- /.sidebar-menu -->

  <!-- Logout Button -->
  <div class="sidebar-footer">
      <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger btn-block" title="Logout">
          <i class="fas fa-sign-out-alt"></i> Logout
      </a>
  </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $judul ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $judul ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">