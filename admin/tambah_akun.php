<?php
	include('config.php');

    $level=$_POST['level'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	mysqli_query($conn,"insert into user values('','$level', '$nama', '$username', '$password')"); 
							
	echo "<script>window.alert('DATA BERHASIL DITAMBAH!')
    	window.location='daftar-akun-admin.php'</script>";

?>