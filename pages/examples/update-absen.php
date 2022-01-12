<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $idAbsen = $_POST['id_absen'];
      $InputGm = $_POST['id_guru_mapel'];
      $InputTgl = $_POST['tgl_absen'];
      $InputSt = $_POST['start_time'];
      $InputEt = $_POST['end_time'];
      $InputJK = $_POST['id_jurusan_kelas'];
      
      if (empty($InputGm) || empty($InputTgl) || empty($InputSt) || empty($InputEt) || empty($InputJK)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               //document.location.href = '../teacher/forms/edit-absen.php';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE tbl_absen SET id_guru_mapel = '$InputGm', tgl_absen = '$InputTgl', start_time = '$InputSt', end_time = '$InputEt', id_jurusan_kelas = '$InputJK' where id_absen = '$idAbsen'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
                        text: 'Anda masuk ke halaman data absen',
                        icon: 'success',
                     });
                  },10);  
                  window.setTimeout(function(){ 
                     window.location.replace('../teacher/forms/absen.php');
                  },1500);
               </script>
            ";
      }
   
?>
<script src="../../package/sweetalert2.all.min.js"></script>