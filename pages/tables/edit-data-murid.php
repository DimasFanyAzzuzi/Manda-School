<?php
  require('../examples/koneksi.php');
  session_start();
  if (!isset($_SESSION['Name'])) {
    echo "
      <script>
        alert('Harap login terlebih dahulu sebelum mengakses halaman ini!');
        document.location.href = '../examples/login.php';
      </script>
    ";
  }
?>
<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>MANDA SCHOOL</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="../../../argon-dashboard/index.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.min23cd.css?v=1.2.1" type="text/css">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../../assets/img/brand/manda.png" class="navbar-brand-img" alt="..."><b> MANDA</b>
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="../examples/dashboard.php" class="nav-link">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../examples/profile.php"> 
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Data </span>
              </a>
              <div class="collapse" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../tables/daftar-guru.php" class="nav-link">
                      <span class="sidenav-mini-icon"> T </span>
                      <span class="sidenav-normal"> Daftar Guru </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/daftar-murid.php" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal"> Daftar Murid </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/daftar-admin.php" class="nav-link">
                      <span class="sidenav-mini-icon"> U </span>
                      <span class="sidenav-normal"> Daftar Admin </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/laporan-guru.php" class="nav-link">
                      <span class="sidenav-mini-icon"> D </span>
                      <span class="sidenav-normal"> Laporan Guru </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/laporan-murid.php" class="nav-link">
                      <span class="sidenav-mini-icon"> D </span>
                      <span class="sidenav-normal"> Laporan Murid </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../calendar.php">
                <i class="ni ni-calendar-grid-58 text-red"></i>
                <span class="nav-link-text">Calendar</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Other</span>
            <span class="docs-mini">D</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="../examples/profile.php" target="_blank">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../examples/logout.php">
                <i class="ni ni-user-run"></i>
                <span class="nav-link-text">Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-gradient-green pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Data</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../examples/dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="daftar-murid.php">Daftar Murid</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../../assets/img/brand/manda.png" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">
                      <?php
                          include '../examples/koneksi.php';

                          $GetTable = mysqli_query($koneksi, "SELECT COUNT(id_admin) AS CountData FROM tbl_admin");
                          $GetData = mysqli_fetch_array($GetTable);
                          $GetCount = $GetData['CountData'];

                          echo $GetCount;
                      ?>
                      </span>
                      <span class="description">Admin</span>
                    </div>
                    <div>
                      <span class="heading">
                      <?php
                          include '../examples/koneksi.php';

                          $GetTable = mysqli_query($koneksi, "SELECT COUNT(id_siswa) AS CountData FROM tbl_siswa");
                          $GetData = mysqli_fetch_array($GetTable);
                          $GetCount = $GetData['CountData'];

                          echo $GetCount;
                      ?>
                      </span>
                      <span class="description">Students</span>
                    </div>
                    <div>
                      <span class="heading">
                      <?php
                          include '../examples/koneksi.php';

                          $GetTable = mysqli_query($koneksi, "SELECT COUNT(id_guru) AS CountData FROM tbl_guru");
                          $GetData = mysqli_fetch_array($GetTable);
                          $GetCount = $GetData['CountData'];

                          echo $GetCount;
                      ?>
                      </span>
                      <span class="description">Teachers</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  MANDA<span class="font-weight-light">, BERIMAN</span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Jl. Argopuro No. 55, Situbondo
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Admin - FDE Tim 
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Madrasah Aliyah Negeri 2 Situbondo
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Data </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php
              $idSiswa = $_GET['id_siswa'];

              $SelectData = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id_siswa = '$idSiswa'");
              $GetData = mysqli_fetch_array($SelectData);
            ?>
              <form action="../examples/update-data-murid.php" method="POST" enctype="multipart/form-data" autocomplete="OFF"> 
              <input type="hidden" name="id_siswa" value="<?php echo $idSiswa; ?>"></input>
                <h6 class="heading-small text-muted mb-4">Data Murid</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Lengkap</label>
                        <input type="text" id="input-username" class="form-control" name="nama_siswa" placeholder="Maksimal 30 kata" value="<?php echo $GetData['nama_siswa']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">NISN</label>
                        <input type="text" id="input-email" class="form-control" name="nisn" placeholder="Maksimal 20 angka" value="<?php echo $GetData['nisn']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="Nama">Jenis Kelamin*</label>
										    <select name="jenis_kelamin" class="custom-select">
                          <option value="">- Pilih jenis kelamin -</option>
                          <option value="Laki-laki" <?php if($GetData['jenis_kelamin'] == 'L') {echo"selected";} ?>>L</option>
                          <option value="Perempuan" <?php if($GetData['jenis_kelamin'] == 'P') {echo"selected";} ?>>P</option>
										    </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Tanggal Lahir</label>
                        <input type="date" id="input-last-name" class="form-control" name="tgl_lahir" placeholder="Date" value="<?php echo $GetData['tgl_lahir']?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Alamat</label>
                        <input id="input-address" class="form-control" name="alamat" placeholder="Jln. Argopouro No. 55 Desa, Kec., Kab." type="text" value="<?php echo $GetData['alamat']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Password</label>
                        <input id="input-address" class="form-control" name="password_siswa" placeholder="*****" type="text" value="<?php echo $GetData['password_siswa']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Handphone*</label>
                        <input type="text" id="input-city" class="form-control" name="no_hp" placeholder="08**********" value="<?php echo $GetData['no_hp']?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="Nama">Kelas Jurusan</label>
										    <select name="id_jurusan_kelas" class="custom-select">
                          <option value="">- Pilih Kelas -</option>
                          <?php 
                            $GetTableJK = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan_kelas");
                            while ($GetDataJK = mysqli_fetch_array($GetTableJK)) {
                              if($GetData['id_jurusan_kelas'] == $GetDataJK['id_jurusan_kelas']) {
                                $terpilih = "selected"; 
                              }else {
                                $terpilih = "";
                              }
                              echo "
                                <option value='$GetDataJK[id_jurusan_kelas]' $terpilih>$GetDataJK[nama_jurusan_kelas]</option>
                              ";
                            }
                          ?>
										    </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Kode Admin</label>
                        <input type="number" id="input-postal-code" class="form-control" name="id_admin" placeholder="Kode Admin" value="<?php echo $GetData['id_admin']?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                    <div class="col-lg-12 col-5 text-right">
                      <button class="btn btn-sm btn-success" type="submit">Perbarui Data</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">FDE Team</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.min23cd.js?v=1.2.1"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>
</html>