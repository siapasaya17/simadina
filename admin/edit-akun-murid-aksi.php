<?php 
// Menghubungkan file ini dengan file database
include 'config.php';
// Mengecek apakah ID ada datanya atau tidak
if (isset($_POST['id_murid'])) {
    if ($_POST['id_murid'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        $id_murid=$_POST['id_murid'];
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
        $foto_nama = $_FILES['foto']['name'];
        $foto_size = $_FILES['foto']['size'];
    }else{
        header("location:akun-murid.php");
    }

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
          $file_tmp = $_FILES['foto']['tmp_name'];   
		  // Membuat angka/huruf acak berdasarkan waktu diupload
          $tanggal = md5(date('Y-m-d h:i:s'));
		  // Menyatukan angka/huruf acak dengan nama file aslinya
          $foto_nama_new = $tanggal.'-'.$foto_nama; 

		  // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
          if(in_array($ekstensi, $ekstensi_izin) === true)  {

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT foto FROM murid WHERE id_murid='$id_murid'";
            $data_foto = mysqli_query($conn, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("foto-murid/".$foto_lama['foto']);    

			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto-murid/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($conn, "UPDATE murid SET nama='$nama', nik='$nik', ttl='$ttl', jenis_kelamin='$jenis_kelamin', 
            alamat='$alamat', telpon='$telpon', nisn='$nisn', kelurahan='$kelurahan', kecamatan='$kecamatan', jenis_tinggal='$jenis_tinggal',
            email='$email', nidn='$nidn', agama='$agama', nama_ibu='$nama_ibu', pdd_ibu='$pdd_ibu', pekerjaan_ibu='$pekerjaan_ibu', 
            penghasilan_ibu='$penghasilan_ibu', nama_ayah='$nama_ayah', pdd_ayah='$pdd_ayah', pekerjaan_ayah='$pekerjaan_ayah',
            penghasilan_ayah='$penghasilan_ayah',  no_kk='$no_kk', kelas='$kelas', kebutuhan_khusus='$kebutuhan_khusus', 
            jarak_rumah='$jarak_rumah', foto='$foto_nama_new' WHERE id_murid='$id_murid'");

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
            $query = mysqli_query($conn, "UPDATE murid SET nama='$nama', nik='$nik', ttl='$ttl', jenis_kelamin='$jenis_kelamin', 
            alamat='$alamat', telpon='$telpon', nisn='$nisn', kelurahan='$kelurahan', kecamatan='$kecamatan', jenis_tinggal='$jenis_tinggal',
            email='$email', nidn='$nidn', agama='$agama', nama_ibu='$nama_ibu', pdd_ibu='$pdd_ibu', pekerjaan_ibu='$pekerjaan_ibu', 
            penghasilan_ibu='$penghasilan_ibu', nama_ayah='$nama_ayah', pdd_ayah='$pdd_ayah', pekerjaan_ayah='$pekerjaan_ayah',
            penghasilan_ayah='$penghasilan_ayah',  no_kk='$no_kk', kelas='$kelas', kebutuhan_khusus='$kebutuhan_khusus', 
            jarak_rumah='$jarak_rumah' WHERE id_murid='$id_murid'");
            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:akun-murid.php?pesan=berhasil");
            }else {
                header("location:akun-murid.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:akun-murid.php");
}
?>