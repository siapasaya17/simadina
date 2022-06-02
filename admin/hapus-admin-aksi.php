<?php
	include 'config.php';

	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where id='$id'");
	
		echo "<script>window.alert('DATA BERHASIL DIHAPUS!')
    	window.location='daftar-akun-admin.php'</script>";

?>
