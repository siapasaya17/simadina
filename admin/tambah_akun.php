<?php
	include('config.php');	
	// $id=$_GET['id'];
    $level=$_POST['level'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_guru=$_POST['id_guru'];
	$id_murid=$_POST['id_murid'];
	
	mysqli_query($conn,"insert into user values('','$level', '$nama', '$username', '$password', '$id_guru', '$id_murid')"); 
							
	echo "<script>window.alert('DATA BERHASIL DITAMBAH!')
    	window.location='daftar-akun-admin.php'</script>";

?>