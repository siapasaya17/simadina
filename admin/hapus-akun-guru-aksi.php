<?php 
include 'config.php';
if (isset($_GET['id_guru'])) {
	if ($_GET['id_guru'] != "") {
		
		// Mengambil ID diURL
		$id_guru = $_GET['id_guru'];

		// Mengambil data siswa_foto didalam table siswa
		$get_foto = "SELECT foto FROM guru WHERE id_guru='$id_guru'";
		$data_foto = mysqli_query($conn, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("foto-guru/".$foto_lama['foto']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"DELETE FROM guru WHERE id_guru='$id_guru'");
		if ($query) {
			// header("location:masukkan-jadwal-admin.php?pesan=hapus");
			echo "<script>window.alert('DATA BERHASIL DIHAPUS!')
    	window.location='akun-guru.php'</script>";
		}else{
			// header("location:masukkan-jadwal-admin.php?pesan=gagalhapus");
			echo "<script>window.alert('DATA GAGAL DIHAPUS!')
    	window.location='akun-guru.php'</script>";
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		// header("location:masukkan-jadwal-admin.php");
		echo "<script>window.alert('ID KOSONG !')
    	window.location='akun-guru.php'</script>";
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	// header("location:masukkan-jadwal-admin.php");
	echo "<script>window.alert('TIDAK ADA DATA!')
    	window.location='akun-guru.php'</script>";
}

?>