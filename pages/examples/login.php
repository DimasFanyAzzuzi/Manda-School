<?php
	require 'koneksi.php';
	session_start();
	error_reporting(0);
	
	if (isset($_POST['submit'])) {
		$Username = $_POST['txt_email'];
		$Password = $_POST['txt_pass'];

		$GetTable = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username = '$Username' AND password = '$Password'");
		$GetData = mysqli_fetch_array($GetTable);

		$GetTableMahasiswa = mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE nip = '$Username' AND password_guru = '$Password'");
		$GetDataMahasiswa = mysqli_fetch_array($GetTableMahasiswa);
		
		if ($Username == "" || $Password == "") {
			echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Gagal Login!',
							text: 'Lengkapi username dan password',
							icon: 'error',
						});
					},10);
					window.setTimeout(function(){ 
						window.location.replace('login.php');
					},1500);
				</script>
			";
		}
		else if ($Username == $GetData['username'] && $Password == $GetData['password']) {
			$_SESSION['Username'] = $Username;
			$_SESSION['Password'] = $Password;
      $_SESSION['User'] = $GetData['username'];
      $_SESSION['Pass'] = $GetData['password'];
			$_SESSION['Name'] = $GetData['fullname'];
			$_SESSION['ID'] = $GetData['id_admin'];

			echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil Login!',
							text: 'Selamat datang di server, $Username',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('dashboard.php');
					},1500);
				</script>
			";
		}
		else if ($Username == $GetDataMahasiswa['nip'] && $Password == $GetDataMahasiswa['password_guru']) {
			$_SESSION['Username'] = $Username;
			$_SESSION['Password'] = $Password;
      $_SESSION['ID'] = $GetDataMahasiswa['id_guru'];
			$_SESSION['NIP'] = $GetDataMahasiswa['nip'];
      $_SESSION['PW'] = $GetDataMahasiswa['password_guru'];
			$_SESSION['Name'] = $GetDataMahasiswa['nama_guru'];
      $_SESSION['JK'] = $GetDataMahasiswa['jenis_kelamin'];
      $_SESSION['HP'] = $GetDataMahasiswa['no_hp'];
      $_SESSION['TL'] = $GetDataMahasiswa['tgl_lahir'];
      $_SESSION['Am'] = $GetDataMahasiswa['alamat'];
      $_SESSION['Mpl'] = $GetDataMahasiswa['id_mapel'];
      $_SESSION['Adm'] = $GetDataMahasiswa['id_admin'];

			echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil Login!',
							text: 'Selamat datang di server, $Username',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('../teacher/forms/dashboard.php');
					},1500);
				</script>
			";
		}
		else {
			echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Gagal Login!',
							text: 'Username dan password salah',
							icon: 'error',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('login.php');
					},1500);
				</script>
			";
		}
	}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>MAN 2 SITUBONDO</title>
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

<body class="bg-default">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <!-- <div class="container"> -->
      <a class="navbar-brand" href="login.php">
        <img src="../../assets/img/brand/manda.png"><b> Selamat Datang di Website MAN 2 Situbondo</b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../dashboards/dashboard.html">
                <img src="../../assets/img/brand/manda.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/man2situbondo" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/manda_beriman/" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.youtube.com/channel/UCwn2qgZrbLorYRapbqmzHVg" target="_blank" data-toggle="tooltip" data-original-title="Subscribe us on Youtube">
              <i class="fab fa-youtube-square"></i>
              <span class="nav-link-inner--text d-lg-none">Youtube</span>
            </a>
        </ul>
      </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-green py-7 py-lg-8 pt-lg-9">
      <div class="container">
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <!-- <small>Or sign in with credentials</small> -->
              </div>
              <form action="login.php" method="POST" role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="txt_email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="txt_pass">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Ingat</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-slack btn-icon" value="Login">Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">FDE Tim</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="../../package/sweetalert2.all.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.min23cd.js?v=1.2.1"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
</body>
</html>