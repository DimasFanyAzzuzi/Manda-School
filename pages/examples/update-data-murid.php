<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $idSiswa = $_POST['id_siswa'];
      $InputNama = $_POST['nama_siswa'];
      $InputNisn = $_POST['nisn'];
      $ChooseKL = $_POST['jenis_kelamin'];
      $InputTgl = $_POST['tgl_lahir'];
      $InputAla = $_POST['alamat'];
      $InputPs = $_POST['password_siswa'];
      $InputHp = $_POST['no_hp'];
      $InputJK = $_POST['id_jurusan_kelas'];
      $InputAdm = $_POST['id_admin'];
      
      if (empty($InputNama) || empty($InputNisn) || empty($ChooseKL) || empty($InputTgl) || empty($InputAla) || empty($InputPs) || empty($InputHp) || empty($InputJK) || empty($InputAdm)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               //document.location.href = '../tables/update-data-murid.php';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE tbl_siswa SET nama_siswa = '$InputNama', nisn = '$InputNisn', jenis_kelamin = '$ChooseKL', tgl_lahir = '$InputTgl', alamat = '$InputAla', password_siswa = '$InputPs', no_hp = '$InputHp', id_jurusan_kelas = '$InputJK', id_admin = '$InputAdm' where id_siswa = '$idSiswa'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
                        text: 'Anda masuk ke halaman data murid',
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