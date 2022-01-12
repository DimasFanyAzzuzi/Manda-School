<?php
	require "../examples/koneksi.php";

	$UserId = $_GET['id_guru'];

	$SelectData = mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id_guru = '$UserId'");
	$GetDataIMG = mysqli_fetch_array($SelectData);
	$RemoveIMG = unlink("../../assets/img/profil/$GetDataIMG[image_guru]");

	if ($RemoveIMG) {
		mysqli_query($koneksi, "DELETE FROM tbl_guru WHERE id_guru = '$UserId'");
		echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman daftar guru',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('../tables/daftar-guru.php');
		},1500);
		</script>
      ";
	}
?>
<script src="../../package/sweetalert2.all.min.js"></script>