<?php
  require('koneksi.php');
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
              <a href="dashboard.php" class="nav-link">
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
              <a class="nav-link" href="profile.php" target="_blank">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
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
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../../assets/img/brand/manda.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-green opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $_SESSION['Name'] ?></h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../../assets/img/brand/manda.png" alt="Image placeholder" class="card-img-top">
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
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">
                      <?php
                          include 'koneksi.php';

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
                          include 'koneksi.php';

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
                          include 'koneksi.php';

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
                  <h3 class="mb-0">Profile </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Username" value="manda">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Password</label>
                        <input type="email" id="input-email" class="form-control" placeholder="admin123">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Fullname</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="AdminMan">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control" placeholder="A few words about you ...">Tangguung jawab kami jika website ini ada kesalahan.</textarea>
                  </div>
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