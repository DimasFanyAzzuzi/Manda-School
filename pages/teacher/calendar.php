<?php
  session_start();
  if (!isset($_SESSION['Name'])) {
    echo "
      <script>
        alert('Harap login terlebih dahulu sebelum mengakses halaman ini!');
        document.location.href = '../../examples/login.php';
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
  <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="../../../argon-dashboard/index.html" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
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
  <link rel="stylesheet" href="../../assets/vendor/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
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
        '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
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
              <a href="../teacher/forms/dashboard.php" class="nav-link">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../teacher/forms/profile.php"> 
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../teacher/forms/absen.php">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Kehadiran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../teacher/forms/validasi.php">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Laporan Absen </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="calendar.php">
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
              <a class="nav-link" href="../teacher/forms/profile.php" target="_blank">
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
    <div class="header header-dark bg-gradient-green pb-6 content__title content__title--calendar">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6">
              <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Full calendar</h6>
              <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
              <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                <i class="fas fa-angle-left"></i>
              </a>
              <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                <i class="fas fa-angle-right"></i>
              </a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Week</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Day</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <!-- Fullcalendar -->
          <div class="card card-calendar">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Calendar</h5>
            </div>
            <!-- Card body -->
            <div class="card-body p-0">
              <div class="calendar" data-toggle="calendar" id="calendar"></div>
            </div>
          </div>
          <!-- Modal - Add new event -->
          <!--* Modal header *-->
          <!--* Modal body *-->
          <!--* Modal footer *-->
          <!--* Modal init *-->
          <div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                  <form class="new-event--form">
                    <div class="form-group">
                      <label class="form-control-label">Event title</label>
                      <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title">
                    </div>
                    <div class="form-group mb-0">
                      <label class="form-control-label d-block mb-3">Status color</label>
                      <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                        <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                        <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                        <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                        <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                        <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                        <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                      </div>
                    </div>
                    <input type="hidden" class="new-event--start" />
                    <input type="hidden" class="new-event--end" />
                  </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary new-event--add">Add event</button>
                  <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal - Edit event -->
          <!--* Modal body *-->
          <!--* Modal footer *-->
          <!--* Modal init *-->
          <div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                  <form class="edit-event--form">
                    <div class="form-group">
                      <label class="form-control-label">Event title</label>
                      <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label d-block mb-3">Status color</label>
                      <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                        <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                        <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                        <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                        <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                        <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                        <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label">Description</label>
                      <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                      <i class="form-group--bar"></i>
                    </div>
                    <input type="hidden" class="edit-event--id">
                  </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn btn-primary" data-calendar="update">Update</button>
                  <button class="btn btn-danger" data-calendar="delete">Delete</button>
                  <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
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
  <!-- Optional JS -->
  <script src="../../assets/vendor/moment/min/moment.min.js"></script>
  <script src="../../assets/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="../../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
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
      document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

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