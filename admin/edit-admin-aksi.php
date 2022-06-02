
<?php
	include('config.php');
	
	$id=$_POST['id'];
	$level=$_POST['level'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	mysqli_query($conn,"update user set 
							level='$level', nama='$nama', username='$username', password='$password'
							where id='$id'");
							
		echo "<script>window.alert('DATA BERHASIL DIUPDATE!')
    	window.location='daftar-akun-admin.php'</script>";

?>
