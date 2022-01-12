<?php
   require "koneksi.php";
   $InputGuru = $_POST['id_guru_mapel'];
   $InputJK = $_POST['id_jurusan_kelas'];
   $InputTgl = $_POST['tgl_absen'];
   $InputS = $_POST['start_time'];
   $InputE = $_POST['end_time'];

   if (empty($InputGuru) ||  empty($InputJK) || empty($InputTgl) || empty($InputS) || empty($InputE)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = '../teacher/forms/tambah-absen.php';
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
   
   else {
      mysqli_query($koneksi, "INSERT INTO tbl_absen (id_guru_mapel, id_jurusan_kelas, tgl_absen, start_time, end_time) VALUES ('$InputGuru', '$InputJK', '$InputTgl', '$InputS', '$InputE')");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
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