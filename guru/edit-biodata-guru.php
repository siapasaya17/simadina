<?php 
// Menghubungkan file ini dengan file database
include '../admin/config.php';
// Mengecek apakah ID ada datanya atau tidak
if (isset($_POST['id_guru'])) {
    if ($_POST['id_guru'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        $id_guru = $_POST['id_guru'];
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

    }else{
        header("location:biodata-guru.php");
    }

    // Mengecek apakah file lebih besar 2 MB atau tidak
    if ($foto_size > 2097152) {
	   // Jika File lebih dari 2 MB maka akan gagal mengupload File
       header("location:biodata-guru.php?pesan=size");

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

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT foto FROM guru WHERE id_guru='$id_guru'";
            $data_foto = mysqli_query($conn, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("foto-guru/".$foto_lama['foto']);    

			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto-guru/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($conn, "UPDATE guru SET nama='$nama', nik='$nik', ttl='$ttl', jenis_kelamin='$jenis_kelamin', 
            alamat='$alamat', telpon='$telpon', agama='$agama', status_pegawai='$status_pegawai', ptk='$ptk', email='$email',
            nidn='$nidn', nama_ibu='$nama_ibu', nama_ayah='$nama_ayah', foto='$foto_nama_new' WHERE id_guru='$id_guru'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:biodata-guru.php?pesan=berhasil");
            } else {
                header("location:biodata-guru.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:biodata-guru.php?pesan=ekstensi");        }

        }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($conn, "UPDATE guru SET nama='$nama', nik='$nik', ttl='$ttl', jenis_kelamin='$jenis_kelamin', 
          alamat='$alamat', telpon='$telpon', agama='$agama', status_pegawai='$status_pegawai', ptk='$ptk', email='$email',
          nidn='$nidn', nama_ibu='$nama_ibu', nama_ayah='$nama_ayah' WHERE id_guru='$id_guru'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:biodata-guru.php?pesan=berhasil");
            }else {
                header("location:biodata-guru.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:biodata-guru.php");
}
?>