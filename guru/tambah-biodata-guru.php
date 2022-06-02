<?php
	include('../admin/controller.php');
	
	$id_guru=$_POST['id_guru'];
	$nama=$_POST['nama'];
	$nik=$_POST['nik'];
	$ttl=$_POST['ttl'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
    $telpon=$_POST['telpon'];
	$agama=$_POST['agama'];
	$masukan_foto=$_POST['masukan_foto'];
	$status_pegawai=$_POST['status_pegawai'];
	$ptk=$_POST['ptk'];
    $email=$_POST['email'];
	$nidn=$_POST['nidn'];
	$nama_ibu=$_POST['nama_ibu'];
	$nama_ayah=$_POST['nama_ayah'];
	
	mysqli_query($conn,"update guru set 
							nama='$nama', nik='$nik', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat', telpon='$telpon', agama='$agama', masukan_foto='$masukan_foto', status_pegawai='$status_pegawai', ptk='$ptk', email='$email', nidn='$nidn', nama_ibu='$nama_ibu', nama_ayah='$nama_ayah'
							where id_guru='$id_guru'");
							
		echo "<script>window.alert('DATA BERHASIL DIUPDATE!')
    	window.location='biodata-guru.php'</script>";

?>