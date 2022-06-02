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
$nisn=$_POST['nisn'];
$kelurahan=$_POST['kelurahan'];
$kecamatan=$_POST['kecamatan'];
$jenis_tinggal=$_POST['jenis_tinggal'];
$email=$_POST['email'];
$nidn=$_POST['nidn'];
$agama=$_POST['agama'];
$nama_ibu=$_POST['nama_ibu'];
$pdd_ibu=$_POST['pdd_ibu'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
$penghasilan_ibu=$_POST['penghasilan_ibu'];
$nama_ayah=$_POST['nama_ayah'];
$pdd_ayah=$_POST['pdd_ayah'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$penghasilan_ayah=$_POST['penghasilan_ayah'];
$no_kk=$_POST['no_kk'];
$kelas=$_POST['kelas'];
$kebutuhan_khusus=$_POST['kebutuhan_khusus'];
$jarak_rumah=$_POST['jarak_rumah'];
$foto_nama = $_FILES['pas_foto']['name'];
$foto_size = $_FILES['pas_foto']['size'];

// Mengecek apakah file lebih besar 2 MB atau tidak
if ($foto_size > 2097152) {
	// Jika File lebih dari 2 MB maka akan gagal mengupload File
	header("location:akun-murid.php?pesan=size");
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
            move_uploaded_file($file_tmp, 'foto-murid/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($conn, "INSERT INTO murid VALUES ('','$nama', '$nik', '$ttl', '$jenis_kelamin', 
            '$alamat','$telpon', '$nidn', '$kelurahan', '$kecamatan', '$jenis_tinggal', '$email', '$nidn', '$agama', 
			'$nama_ibu', '$pdd_ibu','$pekerjaan_ibu', '$penghasilan_ibu', '$nama_ayah', '$pdd_ayah', '$pekerjaan_ayah', 
			'$penghasilan_ayah', '$no_kk', '$kelas', '$kebutuhan_khusus', '$jarak_rumah', 
            '$foto_nama_new')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:akun-murid.php?pesan=berhasil");
            } else {
                header("location:akun-murid.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:akun-murid.php?pesan=ekstensi");        }

    }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
    	 $query = mysqli_query($conn, "INSERT INTO murid(nama, nik, ttl, jenis_kelamin, alamat, telpon, nidn, 
		 kelurahan, kecamatan, jenis_tinggal, email, nidn, agama, nama_ibu, pdd_ibu, pekerjaan_ibu, penghasilan_ibu,
		 nama_ayah, pdd_ayah, pekerjaan_ayah, penghasilan_ayah, no_kk, kelas, kebutuhan_khusus, jarak_rumah,) VALUES ('$nama', 
		 '$nik', '$ttl', '$jenis_kelamin','$alamat','$telpon', '$nidn', '$kelurahan', '$kecamatan', '$jenis_tinggal', '$email', 
		 '$nidn', '$agama','$nama_ibu', '$pdd_ibu','$pekerjaan_ibu', '$penghasilan_ibu', '$nama_ayah', '$pdd_ayah', 
		 '$pekerjaan_ayah','$penghasilan_ayah', '$no_kk', '$kelas', '$kebutuhan_khusus', '$jarak_rumah')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:akun-murid.php?pesan=berhasil");
            } else {
                header("location:akun-murid.php?pesan=gagal");
            }

    }

}
?>