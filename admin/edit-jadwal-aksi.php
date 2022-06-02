<?php 
// Menghubungkan file ini dengan file database
include 'config.php';
// Mengecek apakah ID ada datanya atau tidak
if (isset($_POST['id_jadwal'])) {
    if ($_POST['id_jadwal'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        $id_jadwal = $_POST['id_jadwal'];
        $nama_jadwal = $_POST['nama_jadwal'];
        $foto_nama = $_FILES['pas_foto']['name'];
        $foto_size = $_FILES['pas_foto']['size'];

    }else{
        header("location:masukkan-jadwal-admin.php");
    }

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

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT foto FROM jadwal WHERE id_jadwal='$id_jadwal'";
            $data_foto = mysqli_query($conn, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("foto-jadwal/".$foto_lama['foto']);    

			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto-jadwal/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($conn, "UPDATE jadwal SET nama_jadwal='$nama_jadwal', foto='$foto_nama_new' WHERE id_jadwal='$id_jadwal'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:masukkan-jadwal-admin.php?pesan=berhasil");
            } else {
                header("location:masukkan-jadwal-admin.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:masukkan-jadwal-admin.php?pesan=ekstensi");        }

        }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($conn, "UPDATE jadwal SET nama_jadwal='$nama_jadwal' WHERE id_jadwal='$id_jadwal'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:masukkan-jadwal-admin.php?pesan=berhasil");
            }else {
                header("location:masukkan-jadwal-admin.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:masukkan-jadwal-admin.php");
}
?>