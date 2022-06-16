
<?php
	include('config.php');
	
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$nisn=$_POST['nisn'];
    $semester=$_POST['semester'];
	$kode_lingkup=$_POST['kode_lingkup'];
	$kode_sub_lingkup=$_POST['kode_sub_lingkup'];
    $kode_indikator=$_POST['kode_indikator'];
	$nilai=$_POST['nilai'];
	
	mysqli_query($conn,"update user set 
							l   nama='$nama', kelas='$kelas', nisn='$nisn', semester='$semester', kode_lingkup='$kode_lingkup', 
                                kode_sub_lingkup='$kode_sub_lingkup', kode_indikator='$kode_indikator', nilai='$nilai',
							    where id='$id'");
							
		echo "<script>window.alert('DATA BERHASIL DIUPDATE!')
    	window.location='daftar-nilai-gurus.php'</script>";

?>
