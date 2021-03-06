<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- SEARCH FORM -->
      <form action="<?= base_url('Welcome/search') ?>" method="post">
        <div class="input-group input-group-sm">
          <?php echo form_open('Welcome/search') ?>
          <input class="form-control form-control-navbar" name="keyword" type="text" placeholder="Cari Barang" aria-label="Search" value="<?= set_value('keyword'); ?>">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="submit">
              <i class="fas fa-search"></i>
            </button>
            <?= form_close() ?>
          </div>
        </div>
      </form>

      <div class="navbar">
        <ul class="nav navbar-nav navbar-right">

        </ul>
      </div>

      <!-- Right navbar links -->

      <ul class="navbar-nav ml-auto">
        <!-- K E R A N J A N G  B E L A N J A -->
        <li class="nav-item ml-5">
          <i class="fas fa-shopping-cart"></i>
          <?php
          $keranjang = ':'  .  $this->cart->total_items() . ' items' ?>

          <?php echo  anchor('Dashboard/detail_keranjang', $keranjang) ?>
          <?php if ($this->session->userdata('username')) { ?>
        <li class="nav-item ml-5">
          <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
        </li>
        </li>
      </ul>

      <div class="topbar-divider d-none d-sm-block"></div>
      <ul class="na navbar-nav navbar-right">

        <button type="button" class="btn btn-dark ml-4 mr-2"><?php echo anchor('auth/logout', 'Logout'); ?></button>

      <?php } else { ?>
        <li><button type="button" class="btn btn-dark ml-3 mr-2"><?php echo anchor('auth/login', 'Login'); ?></li>

      <?php } ?>


      </ul>
  </div>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">

      <span class="brand-text font-weight-light ml-0">

        <i class="fas fa-bolt ml-3 "></i> | Eltroshop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">

          <a href="#" class="d-block">
            <div class="ml-2">
              <span class="brand-text font-weight-light ml-0">
                <i class="fas fa-user ml-0"></i> | Halo <?php echo $this->session->userdata('username') ?></div>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Welcome'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>


          <li class="nav-header">KATEGORI</li>
          <li class="nav-item">
            <a href="<?php echo base_url('kategori/elektronik'); ?>" class="nav-link">
              <i class="fas fa-tv"></i>
              <p>
                ELEKTRONIK
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kategori/hp'); ?>" class="nav-link">
              <i class="fas fa-mobile-alt"></i>
              <p>
                HP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kategori/kamera'); ?>" class="nav-link">
              <i class="fas fa-camera"></i></i>
              <p>
                KAMERA
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kategori/aksesoris'); ?>" class="nav-link">
              <i class="fas fa-headphones-alt"></i>
              <p>
                AKSESORIS
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>