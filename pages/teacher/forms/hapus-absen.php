<?php
	require "../../examples/koneksi.php";

	$UserId = $_GET['id_absen'];

	mysqli_query($koneksi, "DELETE FROM tbl_absen WHERE id_absen = '$UserId'");

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
			window.location.replace('../forms/absen.php');
		},1500);
		</script>
      ";
	
?>
<script src="../../../package/sweetalert2.all.min.js"></script>