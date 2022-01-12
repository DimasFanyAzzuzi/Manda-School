<?php
	require "../examples/koneksi.php";

	$UserId = $_GET['id_siswa'];

	$SelectData = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id_siswa = '$UserId'");
	$GetDataIMG = mysqli_fetch_array($SelectData);
	$RemoveIMG = unlink("../../assets/img/profil-murid/$GetDataIMG[image_siswa]");

	if ($RemoveIMG) {
		mysqli_query($koneksi, "DELETE FROM tbl_siswa WHERE id_siswa = '$UserId'");
		echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
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