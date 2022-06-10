<?php
	include('../admin/config.php');

    // $id_nilai=$_POST[''];
	$nama=$_POST['nama'];
	$id_murid=$_POST['id_murid'];
	$kelas=$_POST['kelas'];
	$semester=$_POST['semester'];
	$kode_lingkup=$_POST['lingkup'];
	$kode_sub_lingkup=$_POST['perkembangan'];
	$kode_indikator=$_POST['indikator'];
	$nilai=$_POST['nilai'];

	// echo($nama);
	// echo($kelas);
	// echo($semester);
	// echo($kode_lingkup);
	// echo($kode_sub_lingkup);
	// echo($kode_indikator);
	// echo($nilai);

	mysqli_query($conn,"insert into nilai values('', '$id_murid','$semester', '$kode_lingkup', '$kode_sub_lingkup', '$kode_indikator', '$nilai')"); 
							
	echo "<script>window.alert('DATA BERHASIL DITAMBAH!')
    	window.location='daftar-nilai-guru.php'</script>";

?> 	