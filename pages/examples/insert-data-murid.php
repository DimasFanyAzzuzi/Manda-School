<?php
   require "koneksi.php";
   // Input text KodeBIO, Nama, dan Jenis Kelamin
   $InputNama = $_POST['nama_siswa'];
   $InputNisn = $_POST['nisn'];
   $ChooseKL = $_POST['jenis_kelamin'];
   $InputTgl = $_POST['tgl_lahir'];
   $InputAla = $_POST['alamat'];
   $InputPs = $_POST['password_siswa'];
   $InputHp = $_POST['no_hp'];
   $InputJK = $_POST['id_jurusan_kelas'];
   $InputAdm = $_POST['id_admin'];

   // Input File
   $ChooseFoto = strtolower($_FILES['image_siswa']['name']); // Mengambil nama file
   $Patch = $_FILES['image_siswa']['tmp_name']; // Mengambil lokasi file
   $CheckInput = $_FILES['image_siswa']['error']; // Mengambil bentuk error ketika upload file
   $CheckSize = $_FILES['image_siswa']['size']; // Mengambil ukuran file yang di-upload
   
   // Menampung lokasi pemindahan file ke dalam variabel $MoveTO
   $MoveTO = "../../assets/img/profil-murid/";
   
   // Membatasi valid extension file yang boleh diinput
   $ValidExt = ["jpg", "jpeg", "png"]; // Menampung valid extension dalam array
   $GetNameFile = explode(".", $ChooseFoto); // Memisah nama file untuk mengambil ekstensi file 
   $GetExt = end($GetNameFile); // Mengambil ekstensi file

   // Membuat nama unik untuk file upload supaya tidak terduplikasi
   $GetKodeBIO = uniqid(); // Mengambil kode bio otomatis dari file auto-code
   $SetUniqName = $GetKodeBIO; // Membuat variabel baru untuk menampung kode bio
   $SetUniqName .= "-"; // Menggabungkan kode bio dengan tanda (-)
   $SetUniqName .= $ChooseFoto; // Menggabungkan kode bio dan tanda (-) dengan nama file

   if (empty($InputNama) || empty($InputNisn) || empty($ChooseKL) || empty($InputTgl) || empty($InputAla) || empty($InputPs) || empty($InputHp) || empty($InputJK) || empty($InputAdm)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = '../tables/tambah-data-murid.php';
         </script>
      ";
   }
   // else if (empty($InputNama)) {
   //    echo "
   //       <script>
   //          alert('Nama belum diisi!');
   //          document.location.href = '../examples/tambah-data.php';
   //       </script>
   //    ";
   // }
   // else if (empty($ChooseKL)) {
   //    echo "
   //       <script>
   //          alert('Jenis kelamin belum diisi!');
   //          document.location.href = '../form-biodata.php';
   //       </script>
   //    ";
   // }
   // else if (empty($InputNip)) {
   //    echo "
   //       <script>
   //          alert('Profesi belum diisi!');
   //          document.location.href = '../form-biodata.php';
   //       </script>
   //    ";
   // }
   else if ($CheckInput === 4) {
      echo "
         <script>
            alert('File foto masih belum diisi!');
            document.location.href = '../tables/tambah-data-murid.php';
         </script>
      ";
   }
   else if (!in_array($GetExt, $ValidExt)) {
      echo "
         <script>
            alert('Ekstensi file yang diperbolehkan hanya (JPG, JPEG, PNG)!');
            document.location.href = '../tables/tambah-data-murid.php';
         </script>
      ";
   }
   else if ($CheckSize > 600000) {
      echo "
         <script>
            alert('Ukuran file terlalu besar, MAX (600 KB)!');
            document.location.href = '../tables/tambah-data-murid.php';
         </script>
      ";
   }
   else {
      move_uploaded_file($Patch, $MoveTO.$SetUniqName);
      mysqli_query($koneksi, "INSERT INTO tbl_siswa (image_siswa, nama_siswa, jenis_kelamin, no_hp, tgl_lahir, nisn, password_siswa, alamat, id_jurusan_kelas, id_admin) VALUES ('$SetUniqName', '$InputNama', '$ChooseKL', '$InputHp', '$InputTgl', '$InputNisn', '$InputPs', '$InputAla', '$InputJK', '$InputAdm')");
      echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menambahkan data!',
				text: 'Anda masuk ke halaman daftar murid',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('../tables/daftar-murid.php');
		},1500);
		</script>
      ";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>