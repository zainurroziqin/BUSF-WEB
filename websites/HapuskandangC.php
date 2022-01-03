<?php 
  include '../configs/koneksi.php';
$id = $_GET["id"];

if (hapusC($id) > 0){
		echo "
	<script>
	alert ('data berhasil dihapus!')
	document.location.href ='KandangC.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal dihapus!')
	document.location.href ='KandangC.php';
	</script>";
}

 ?>