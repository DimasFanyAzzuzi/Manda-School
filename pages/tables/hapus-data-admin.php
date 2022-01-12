<?php
    require ('../examples/koneksi.php');
    $id = $_GET['id_admin'];
    mysqli_query($koneksi, "DELETE FROM tbl_admin WHERE id_admin='$id'");
    echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman daftar admin',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('../tables/daftar-admin.php');
		},1500);
		</script>
      ";
?>
<script src="../../package/sweetalert2.all.min.js"></script>