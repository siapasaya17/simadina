<?php 
// Menghubungkan file ini dengan file database
include 'config.php';

// Mengambil data dari form lalu ditampung didalam variabel
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$ttl=$_POST['ttl'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$telpon=$_POST['telpon'];
$agama=$_POST['agama'];
$status_pegawai=$_POST['status_pegawai'];
$ptk=$_POST['ptk'];
$email=$_POST['email'];
$nidn=$_POST['nidn'];
$nama_ibu=$_POST['nama_ibu'];
$nama_ayah=$_POST['nama_ayah'];
$foto_nama = $_FILES['pas_foto']['name'];
$foto_size = $_FILES['pas_foto']['size'];

// Mengecek apakah file lebih besar 2 MB atau tidak
if ($foto_size > 2097152) {
	// Jika File lebih dari 2 MB maka akan gagal mengupload File
	header("location:masukkan-jadwal-admin.php?pesan=size");
}else{

	// Mengecek apakah Ada file yang diupload atau tidak
	if ($foto_nama != "") {

		// Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
		$ekstensi_izin = array('png','jpg','jpeg', 'pdf', 'doc', 'docx');
		// Memisahkan nama file dengan Ekstensinya
		$pisahkan_ekstensi = explode('.', $foto_nama); 
		$ekstensi = strtolower(end($pisahkan_ekstensi));
		// Nama file yang berada di dalam direktori temporer server
		$file_tmp = $_FILES['pas_foto']['tmp_name'];   
		// Membuat angka/huruf acak berdasarkan waktu diupload
		$tanggal = md5(date('Y-m-d h:i:s'));
		// Menyatukan angka/huruf acak dengan nama file aslinya
		$foto_nama_new = $tanggal.'-'.$foto_nama; 

		// Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
		if(in_array($ekstensi, $ekstensi_izin) === true)  {
			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto-guru/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($conn, "INSERT INTO guru VALUES ('','$nama', '$nik', '$ttl', '$jenis_kelamin', 
            '$alamat','$telpon', '$agama', '$status_pegawai','$ptk', '$email', '$nidn','$nama_ibu', '$nama_ayah',
            '$foto_nama_new')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:akun-guru.php?pesan=berhasil");
            } else {
                header("location:akun-guru.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:akun-guru.php?pesan=ekstensi");        }

    }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
    	 $query = mysqli_query($conn, "INSERT INTO guru(nama, nik, ttl, jenis_kelamin, alamat, telpon, agama, 
         status_pegawai, ptk, email, nidn, nama_ibu, nama_ayah) VALUES ('$nama', '$nik', '$ttl', '$jenis_kelamin', 
            '$alamat','$telpon', '$agama', '$status_pegawai','$ptk', '$email', '$nidn','$nama_ibu', '$nama_ayah')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:akun-guru.php?pesan=berhasil");
            } else {
                header("location:akun-guru.php?pesan=gagal");
            }

    }

}
?>