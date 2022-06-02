<?php 
include 'config.php';
if (isset($_GET['id_murid'])) {
	if ($_GET['id_murid'] != "") {
		
		// Mengambil ID diURL
		$id_murid = $_GET['id_murid'];

		// Mengambil data siswa_foto didalam table siswa
		$get_foto = "SELECT foto FROM murid WHERE id_murid='$id_murid'";
		$data_foto = mysqli_query($conn, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("foto-murid/".$foto_lama['foto']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"DELETE FROM murid WHERE id_murid='$id_murid'");
		if ($query) {
			// header("location:masukkan-jadwal-admin.php?pesan=hapus");
			echo "<script>window.alert('DATA BERHASIL DIHAPUS!')
    	window.location='akun-murid.php'</script>";
		}else{
			// header("location:masukkan-jadwal-admin.php?pesan=gagalhapus");
			echo "<script>window.alert('DATA GAGAL DIHAPUS!')
    	window.location='akun-murid.php'</script>";
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		// header("location:masukkan-jadwal-admin.php");
		echo "<script>window.alert('ID KOSONG !')
    	window.location='akun-murid.php'</script>";
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	// header("location:masukkan-jadwal-admin.php");
	echo "<script>window.alert('TIDAK ADA DATA!')
    	window.location='akun-murid.php'</script>";
}

?>