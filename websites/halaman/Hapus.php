<?php 
include '../../configs/koneksi.php';
include '../proses/proses-pengguna.php';

$id = $_GET["id"];

if (hapus($id) > 0){
		echo "
	<script>
	alert ('data berhasil dihapus!')
	document.location.href ='Pengguna.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal dihapus!')
	document.location.href ='Pengguna.php';
	</script>";
}
 ?>
