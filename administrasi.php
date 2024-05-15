<?php
  $base_url = 'http://localhost/simkbs/';
  include 'app/koneksi.php';

  $sql_profil = "SELECT * FROM tabel_control WHERE id=1";
  $result_profil = $mysqli->query($sql_profil);
  $row_profil = $result_profil->fetch_object();
  include 'views/layout/user/header.php';
?>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light">
                <a href="beranda">
                    <img src="<?= $base_url; ?>asset_user/img/logo-ngawi.png" alt="logo">
                    <small>DESA WONOKERTO</small>
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="beranda">Beranda</a></li>
                <li><a class="nav-link scrollto" href="beranda">Bansos</a></li>
                <li class="dropdown"><a href="#"><span>Kependudukan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="beranda">Demografi Penduduk</a></li>
                        <li><a href="beranda">Pendidikan</a></li>
                        <li><a href="beranda">Pekerjaan</a></li>
                        <li><a href="beranda">Kelompok Umur</a></li>
                        <li><a href="beranda">Agama</a></li>
                        <li><a href="beranda">Dusun</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="beranda">Kontak</a></li>
                <li><a class="getstarted scrollto" href="login">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
    <div class="pt-3" style="min-height: 629px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <img src="<?= $base_url; ?>asset_user/img/logo-ngawi.png" alt="logo" width="5%">
        </div>
    </div>
</main>

<?php

?>