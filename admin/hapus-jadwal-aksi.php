<?php 
include 'config.php';
if (isset($_GET['id_jadwal'])) {
	if ($_GET['id_jadwal'] != "") {
		
		// Mengambil ID diURL
		$id_jadwal = $_GET['id_jadwal'];

		// Mengambil data siswa_foto didalam table siswa
		$get_foto = "SELECT foto FROM jadwal WHERE id_jadwal='$id_jadwal'";
		$data_foto = mysqli_query($conn, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink($foto_lama['foto']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'");
		if ($query) {
			// header("location:masukkan-jadwal-admin.php?pesan=hapus");
			echo "<script>window.alert('DATA BERHASIL DIHAPUS!')
    	window.location='masukkan-jadwal-admin.php'</script>";
		}else{
			// header("location:masukkan-jadwal-admin.php?pesan=gagalhapus");
			echo "<script>window.alert('DATA GAGAL DIHAPUS!')
    	window.location='masukkan-jadwal-admin.php'</script>";
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		// header("location:masukkan-jadwal-admin.php");
		echo "<script>window.alert('ID KOSONG !')
    	window.location='masukkan-jadwal-admin.php'</script>";
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	// header("location:masukkan-jadwal-admin.php");
	echo "<script>window.alert('TIDAK ADA DATA!')
    	window.location='masukkan-jadwal-admin.php'</script>";
}

?>